<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core;

class AccessToken
{
    const ACCESS_TOKEN_KEY = 'qy_weixin::access_token::hash';

    private $errCode;
    private $message;
    private $accessToken;
    private $expiresIn;

    public static function wrap($resp)
    {
        $accessToken = new AccessToken();
        if (property_exists($resp, "errcode")) {
            $accessToken->setErrCode($resp->errcode);
        }
        if (property_exists($resp, "errmsg")) {
            $accessToken->setMessage($resp->errmsg);
        }
        if (property_exists($resp, "expires_in")) {
            $accessToken->setExpiresIn($resp->expires_in);
        }
        if (property_exists($resp, "access_token")) {
            $accessToken->setAccessToken($resp->access_token);
        }
        return $accessToken;
    }

    public function isSuccess()
    {
        return $this->errCode == 0;
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    public function getErrCode()
    {
        return $this->errCode;
    }

    public function setErrCode($errCode)
    {
        $this->errCode = $errCode;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function setExpiresIn($expiresIn)
    {
        $this->expiresIn = $expiresIn;
    }

    public function getExpireIn()
    {
        return $this->expiresIn;
    }

}
