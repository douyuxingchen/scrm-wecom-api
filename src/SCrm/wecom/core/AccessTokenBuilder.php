<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core;

use Exception;
use Douyuxingchen\ScrmWecomApi\Redis\RedisOp;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\RequestInterface;
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
        $this->redisClient = RedisOp::getInstance();
    }

    public function generate(RequestInterface $request): string
    {
        if ($request instanceof CreateTokenRequest) {
            return '';
        }

        $param             = new CreateTokenParam();
        $config            = $request->getConfig();
        $cacheKey          = $config->cache_key;
        $param->corpid     = $config->corp_id;
        $param->corpsecret = $config->corp_secret;

        $accessToken = $this->getTokenStore($cacheKey);
        if ($accessToken) {
            return $accessToken;
        }

        $tokenObj = $this->build($param);

        $this->setTokenStore($cacheKey, $tokenObj);

        return $tokenObj->getAccessToken();
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

    public function build($param): AccessToken
    {
        $request = new CreateTokenRequest();

        $request->setParam($param);

        $resp = $request->execute();

        return AccessToken::wrap($resp);
    }
}
