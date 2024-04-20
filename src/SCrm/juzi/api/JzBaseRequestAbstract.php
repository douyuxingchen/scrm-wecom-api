<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api;

use Douyuxingchen\ScrmWecomApi\Utils\FinalResp;
use Douyuxingchen\ScrmWecomApi\Utils\SignUtil;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\JzClient;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\JzGlobalConfig;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\config\JzReqConfMain;

abstract class JzBaseRequestAbstract #implements JzBaseRequestInterface
{
    protected $param;

    protected $config;

    public function __construct()
    {
        if (!SignUtil::isDebug()) {
            $this->setConfig(new JzReqConfMain);
        }
    }

    abstract function getMethod(): string;

    abstract function getUrlPath(): string;

    public function setParam($param)
    {
        $this->param = $param;
    }

    public function getParam()
    {
        return $this->param;
    }

    public function setConfig($config)
    {
        JzGlobalConfig::getInstance()->setCorpConf($config);

        $this->config = JzGlobalConfig::getInstance();
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function execute(): FinalResp
    {
        return JzClient::getInstance()->request($this);
    }

}