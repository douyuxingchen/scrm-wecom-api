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

    /**
     * @desc 执行请求
     * Date: 2024/1/3 19:03
     * @return FinalResp
     * @throws \Exception
     */
    public function execute(): FinalResp
    {
        $respData = WbClient::getInstance()->request($this);
        // 错误码
        $code = $respData['errcode'] ?? -1000;
        // 错误信息
        $message = $respData['errmsg'] ?? 'failed';
        // 初始化响应类
        return FinalResp::getInstance()->setCode($code)->setMessage($message)->setData($respData);
    }

}