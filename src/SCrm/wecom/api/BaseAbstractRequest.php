<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config\ReqConfMain;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\GlobalConfig;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\WeComClient;

abstract class BaseAbstractRequest implements RequestInterface
{
    // 处理成功的code
    const SUC_CODE = 0;
    private $param;

    private $config;

    public function __construct()
    {
        if (!GlobalConfig::getInstance()->is_debug) {
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

    public function execute()
    {
        $responseData = WeComClient::getInstance()->request($this);

        $responseData->is_success = $responseData->errcode == self::SUC_CODE;

        return $responseData;
    }

}