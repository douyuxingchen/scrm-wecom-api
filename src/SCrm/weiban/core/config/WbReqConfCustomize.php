<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\core\config;

class WbReqConfCustomize extends WbReqConfAbstract
{
    private $corpId;
    private $secret;

    public function __construct($corpId, $secret)
    {
        $this->corpId = $corpId;
        $this->secret = $secret;
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
        return 'wei_ban_access_token_customize_' . md5($this->secret);
    }
}