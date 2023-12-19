<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\token;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CreateTokenRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return "/cgi-bin/gettoken";
    }

    public function setConfig($config)
    {
        $this->config = $config;
    }
}
