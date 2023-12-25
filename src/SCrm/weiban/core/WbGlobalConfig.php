<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\core;


use Douyuxingchen\ScrmWecomApi\SCrm\weiban\core\config\WbReqConfAbstract;

class WbGlobalConfig extends WbOpConfig
{

    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance(): WbGlobalConfig
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {
    }

    public function setCorpConf(WbReqConfAbstract $reqConf)
    {
        $this->corp_id   = $reqConf->getCorpId();
        $this->secret    = $reqConf->getSecret();
        $this->cache_key = $reqConf->getCacheKey();
    }
}
