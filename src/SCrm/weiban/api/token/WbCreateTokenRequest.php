<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\token;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbCreateTokenRequest extends WbBaseRequestAbstract
{
    public function setConfig($config)
    {
        $this->config = $config;
    }

    public function isNeedToken(): bool
    {
        return false;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/open-api/access_token/get';
    }
}
