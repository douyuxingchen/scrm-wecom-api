<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config;

class ReqConfCustomize extends ReqConfAbstract
{
    private $corpId;
    private $corpSecret;
    private $cacheKey;

    public function __construct($corpId, $corpSecret, $cacheKey)
    {
        $this->corpId     = $corpId;
        $this->cacheKey   = $cacheKey;
        $this->corpSecret = $corpSecret;
    }

    public function getCorpId()
    {
        return $this->corpId;
    }

    public function getCorpSecret()
    {
        return $this->corpSecret;
    }

    public function getCacheKey(): string
    {
        return $this->cacheKey;
    }
}