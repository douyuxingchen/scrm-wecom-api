<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\core;


use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\JzBaseRequestAbstract;
use Douyuxingchen\ScrmWecomApi\Utils\SignUtil;
use Douyuxingchen\ScrmWecomApi\Http\HttpClient;
use Douyuxingchen\ScrmWecomApi\Utils\FinalResp;
use Douyuxingchen\ScrmWecomApi\Http\HttpRequest;
use Douyuxingchen\ScrmWecomApi\Http\HttpResponse;

class JzClient
{
    private $httpRequest;

    public function __construct()
    {
        $this->httpRequest = new HttpRequest();
    }

    public function request(JzBaseRequestAbstract $request): FinalResp
    {
        $params = $request->getParam();
        $method = $request->getMethod();
        $method = strtolower($method);
        // 处理请求相关配置：超时时间&请求地址&拼接Token
        $this->handleRequestConf($request);
        // 处理请求方式&请求参数
        $this->handleRequestParam($method, $params);
        // 发起请求
        $httpResponse = HttpClient::getInstance()->$method($this->httpRequest);
        // 封装返回值
        return $this->returnFinalResponse($httpResponse);
    }

    /**
     * @desc 封装返回类
     * @param HttpResponse $httpResponse
     * @return FinalResp
     */
    private function returnFinalResponse(HttpResponse $httpResponse): FinalResp
    {
        // 解析响应数据
        $respData = json_decode($httpResponse->body, true);
        // 封装响应对象
        $code = -1000;
        $msg  = 'failed';
        if (array_key_exists('errcode', $respData)) {
            $code = $respData['errcode'];
            $msg  = $respData['errmsg'] ?? '';
        }
        if (array_key_exists('code', $respData)) {
            $code = $respData['code'];
            $msg  = $respData['message'] ?? '';
        }
        return FinalResp::getInstance()->setCode($code)->setMessage($msg)->setData($respData);
    }

    /**
     * @desc 处理请求地址
     * @param JzBaseRequestAbstract $request
     */
    private function handleRequestConf(JzBaseRequestAbstract $request)
    {
        $config     = $request->getConfig();
        $urlPath    = $request->getUrlPath();
        $requestUrl = $urlPath . "?token={$config->token}";

        $this->httpRequest->url            = $requestUrl;
        $this->httpRequest->readTimeout    = $config->httpReadTimeout;
        $this->httpRequest->connectTimeout = $config->httpConnectTimeout;
    }

    /**
     * @desc 处理参数
     * @param string $method
     * @param $params
     */
    private function handleRequestParam(string $method, $params)
    {
        if ($method == 'get') {
            $this->httpRequest->url .= $params ? ('&' . http_build_query(get_object_vars($params))) : '';
        } else {
            $this->httpRequest->body = SignUtil::marshal($params);
        }
    }

    private static $defaultInstance;

    public static function getInstance(): JzClient
    {

        if (!(self::$defaultInstance instanceof self)) {
            self::$defaultInstance = new self();
        }
        return self::$defaultInstance;
    }
}
