<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api;

use Douyuxingchen\ScrmWecomApi\Utils\SignUtil;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\JzClient;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\JzGlobalConfig;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\config\JzReqConfMain;

abstract class JzBaseRequestAbstract implements JzBaseRequestInterface
{
    const SUC_CODE = 0;

    protected $param;

    protected $config;

    public function __construct()
    {
        if (!SignUtil::isDebug()) {
            $this->setConfig(new JzReqConfMain);
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
        JzGlobalConfig::getInstance()->setCorpConf($config);

        $this->config = JzGlobalConfig::getInstance();
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function execute()
    {
        $resp = JzClient::getInstance()->request($this);

        if (property_exists($resp, 'errcode')) {
            $resp->success = $resp->errcode == self::SUC_CODE;
        }
        if (property_exists($resp, 'code')) {
            $resp->success = $resp->code == self::SUC_CODE;
        }

        return $resp;
    }

}