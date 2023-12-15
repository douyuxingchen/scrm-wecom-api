<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core;


class WeComOpConfig
{
    public $httpConnectTimeout = 1000;
    public $httpReadTimeout    = 5000;
    public $openRequestUrl     = "https://qyapi.weixin.qq.com";
    public $corp_id;
    public $corp_secret;
    public $cache_key;
}
