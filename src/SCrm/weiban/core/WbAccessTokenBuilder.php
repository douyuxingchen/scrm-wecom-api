<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\core;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\token\param\WbCreateTokenParam;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\token\WbCreateTokenRequest;
use Exception;
use Douyuxingchen\ScrmWecomApi\Redis\RedisLabor;

class WbAccessTokenBuilder
{
    public $redisClient;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        $this->redisClient = RedisLabor::getInstance();
    }

    public function generate(WbBaseRequestAbstract $request): string
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

    public function build($config): WbAccessToken
    {
        // request params class
        $createTokenParam = new WbCreateTokenParam();
        // request class
        $createTokenRequest = new WbCreateTokenRequest();
        // set request params
        $createTokenRequest->setParam($createTokenParam);
        // set request config
        $createTokenRequest->setConfig($config);
        // set param key
        $createTokenParam->corp_id = $config->corp_id;
        // set param secret
        $createTokenParam->secret = $config->secret;
        // request obtain token
        $tokenRes = $createTokenRequest->execute();
        if (!$tokenRes->isSuccess()) {
            $throwMsg = "Failed to obtain token:{$tokenRes->toJson()}";
            throw new Exception($throwMsg);
        }
        // encapsulating token data
        return WbAccessToken::wrap($tokenRes);
    }

    private function setTokenStore($tokenKey, WbAccessToken $tokenObj)
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
