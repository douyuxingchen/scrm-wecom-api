<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\core\config\WbReqConfMain;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\core\WbClient;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\core\WbGlobalConfig;
use Douyuxingchen\ScrmWecomApi\Utils\FinalResp;
use Douyuxingchen\ScrmWecomApi\Utils\SignUtil;

abstract class WbBaseRequestAbstract implements WbBaseRequestInterface
{
    protected $param;

    protected $config;

    public function __construct()
    {
        if (!SignUtil::isDebug()) {
            $this->setConfig(new WbReqConfMain());
        }
    }

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
        WbGlobalConfig::getInstance()->setCorpConf($config);

        $this->config = WbGlobalConfig::getInstance();
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function execute(): FinalResp
    {
        return WbClient::getInstance()->request($this);
    }

}