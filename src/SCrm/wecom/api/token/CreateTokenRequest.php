<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\token;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\RequestInterface;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config\ReqConfInterface;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config\ReqConfMain;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\GlobalConfig;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\WeComClient;

class CreateTokenRequest implements RequestInterface
{

    //通用变量
    private $param;

    private $config;

    public function __construct()
    {
        $this->setConfig();
    }

    public function setParam($param)
    {
        $this->param = $param;
    }

    public function getParam()
    {
        return $this->param;
    }

    public function setConfig($config = null)
    {
        // 默认配置
        if (!$config instanceof ReqConfInterface) {
            $config = new ReqConfMain();
        }

        GlobalConfig::getGlobalConfig()->setCorpConf($config);

        $this->config = GlobalConfig::getGlobalConfig();
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    //通用方法
    public function getUrlPath(): string
    {
        return "/cgi-bin/gettoken";
    }

    public function execute()
    {
        return WeComClient::getInstance()->request($this);
    }
}
