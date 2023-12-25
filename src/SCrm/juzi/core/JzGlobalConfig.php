<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\core;


use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\config\JzReqConfAbstract;

class JzGlobalConfig extends JzOpConfig
{

    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance(): JzGlobalConfig
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {
    }

    public function setCorpConf(JzReqConfAbstract $reqConf)
    {
        $this->token = $reqConf->getToken();
    }
}
