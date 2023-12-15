<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core;


use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config\ReqConfInterface;

class GlobalConfig extends WeComOpConfig
{

    private static $instance;

    private function __construct()
    {
    }

    public static function getGlobalConfig()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {
    }

    public function setCorpConf(ReqConfInterface $reqConf)
    {
        $this->corp_id     = $reqConf->getCorpId();
        $this->cache_key   = $reqConf->getCacheKey();
        $this->corp_secret = $reqConf->getCorpSecret();    }
}
