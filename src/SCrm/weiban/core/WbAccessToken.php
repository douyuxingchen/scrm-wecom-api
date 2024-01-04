<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\core;

use Douyuxingchen\ScrmWecomApi\Utils\FinalResp;

class WbAccessToken
{
    private $accessToken;
    private $expiresIn;

    public static function wrap(FinalResp $resp): WbAccessToken
    {
        $respData    = $resp->getData();
        $accessToken = new self();
        if (array_key_exists('expires_in', $respData)) {
            $accessToken->setExpiresIn($respData['expires_in']);
        }
        if (array_key_exists('access_token', $respData)) {
            $accessToken->setAccessToken($respData['access_token']);
        }
        return $accessToken;
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
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
