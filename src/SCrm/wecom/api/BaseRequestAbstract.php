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

    /**
     * @desc 执行请求
     * Date: 2024/1/3 18:48
     * @return FinalResp
     * @throws \Exception
     */
    public function execute(): FinalResp
    {
        $respData = WeComClient::getInstance()->request($this);
        // 错误码
        $code = $respData['errcode'] ?? -1000;
        // 错误信息
        $message = $respData['errmsg'] ?? 'failed';
        // 初始化响应类
        return FinalResp::getInstance()->setCode($code)->setMessage($message)->setData($respData);
    }

}