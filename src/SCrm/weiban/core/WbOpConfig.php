<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\core;


class WbOpConfig
{
    public $httpConnectTimeout = 1000;
    public $httpReadTimeout    = 5000;
    public $openRequestUrl     = "https://open.weibanzhushou.com";
    public $corp_id;
    public $secret;
    public $cache_key;
}
