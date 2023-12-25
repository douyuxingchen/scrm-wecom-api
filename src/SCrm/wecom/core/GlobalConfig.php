<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core;


use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config\ReqConfAbstract;

class GlobalConfig extends WeComOpConfig
{

    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance(): GlobalConfig
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {
    }

    public function setCorpConf(ReqConfAbstract $reqConf)
    {
        $this->corp_id     = $reqConf->getCorpId();
        $this->cache_key   = $reqConf->getCacheKey();
        $this->corp_secret = $reqConf->getCorpSecret();
    }
}
