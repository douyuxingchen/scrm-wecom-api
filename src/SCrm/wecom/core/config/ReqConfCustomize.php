<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config;

class ReqConfCustomize extends ReqConfAbstract
{
    private $corpId;
    private $corpSecret;

    public function __construct($corpId, $corpSecret)
    {
        $this->corpId     = $corpId;
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
        return 'we_com_access_token_customize_' . md5($this->corpSecret);
    }
}