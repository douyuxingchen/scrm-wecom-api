<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core;

use Exception;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;
use Douyuxingchen\ScrmWecomApi\Redis\RedisLabor;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\token\CreateTokenRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\token\param\CreateTokenParam;

class AccessTokenBuilder
{
    public $redisClient;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        $this->redisClient = RedisLabor::getInstance();
    }

    public function generate(BaseRequestAbstract $request): string
    {
        $config   = $request->getConfig();
        $cacheKey = $config->cache_key;

        $accessToken = $this->getTokenStore($cacheKey);
        if ($accessToken) {
            return $accessToken;
        }

        $tokenObj = $this->build($config);

        $this->setTokenStore($cacheKey, $tokenObj);

        return $tokenObj->getAccessToken();
    }

    public function build($config): AccessToken
    {
        // request params class
        $createTokenParam = new CreateTokenParam();
        // request class
        $createTokenRequest = new CreateTokenRequest();
        // set request params
        $createTokenRequest->setParam($createTokenParam);
        // set request config
        $createTokenRequest->setConfig($config);
        // set param key
        $createTokenParam->corpid = $config->corp_id;
        // set param secret
        $createTokenParam->corpsecret = $config->corp_secret;
        // request obtain token
        $tokenRes = $createTokenRequest->execute();
        if (!$tokenRes->isSuccess()) {
            $throwMsg = "Failed to obtain token:{$tokenRes->toJson()}";
            throw new Exception($throwMsg);
        }
        // encapsulating token data
        return AccessToken::wrap($tokenRes);
    }

    private function setTokenStore($tokenKey, AccessToken $tokenObj)
    {
        $tokenValue = $tokenObj->getAccessToken();
        $expireTime = $tokenObj->getExpireIn() - 200;
        $this->redisClient->setString($tokenKey, $tokenValue, $expireTime);
    }

    private function getTokenStore($cacheKey)
    {
        return $this->redisClient->getString($cacheKey);
    }
}
