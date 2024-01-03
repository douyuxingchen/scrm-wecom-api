<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api;

use Douyuxingchen\ScrmWecomApi\Utils\FinalResp;
use Douyuxingchen\ScrmWecomApi\Utils\SignUtil;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\JzClient;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\JzGlobalConfig;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\config\JzReqConfMain;

abstract class JzBaseRequestAbstract implements JzBaseRequestInterface
{
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

    /**
     * @desc 执行请求
     * @return FinalResp
     * @throws \Exception
     */
    public function execute(): FinalResp
    {
        $responseData = JzClient::getInstance()->request($this);

        $code = -1000;
        $msg  = 'failed';
        if (array_key_exists('errcode', $responseData)) {
            $code = $responseData['errcode'];
            $msg  = $responseData['errmsg'];
        }
        if (array_key_exists('code', $responseData)) {
            $code = $responseData['code'];
            $msg  = $responseData['message'];
        }
        return FinalResp::getInstance()->setCode($code)->setMessage($msg)->setData($responseData);
    }

}