<?php

namespace Douyuxingchen\ScrmWecomApi\Http;

class HttpRequest
{
    public $url;
    public $body;

    public $connectTimeout;
    public $readTimeout;

    public $header;

    public function __construct()
    {
        // 默认配置
        $this->header         = [];
        $this->readTimeout    = 5000;
        $this->connectTimeout = 1000;
    }
}
