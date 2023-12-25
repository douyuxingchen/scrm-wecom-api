<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\core\config;

class WbReqConfCustomize extends WbReqConfAbstract
{
    private $corpId;
    private $secret;
    private $cacheKey;

    public function __construct($corpId, $secret, $cacheKey)
    {
        $this->corpId   = $corpId;
        $this->secret   = $secret;
        $this->cacheKey = $cacheKey;
    }

    public function getCorpId()
    {
        return $this->corpId;
    }

    public function getSecret()
    {
        return $this->secret;
    }

    public function getCacheKey(): string
    {
        return $this->cacheKey;
    }
}