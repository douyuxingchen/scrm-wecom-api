<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api;

use Douyuxingchen\ScrmWecomApi\Utils\FinalResp;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config\ReqConfMain;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\GlobalConfig;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\WeComClient;
use Douyuxingchen\ScrmWecomApi\Utils\SignUtil;

abstract class BaseRequestAbstract implements BaseRequestInterface
{
    protected $param;

    protected $config;

    public function __construct()
    {
        if (!SignUtil::isDebug()) {
            $this->setConfig(new ReqConfMain);
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
        GlobalConfig::getInstance()->setCorpConf($config);

        $this->config = GlobalConfig::getInstance();
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function execute(): FinalResp
    {
        return WeComClient::getInstance()->request($this);
    }
}