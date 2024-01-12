<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\core;


use Douyuxingchen\ScrmWecomApi\Utils\SignUtil;
use Douyuxingchen\ScrmWecomApi\Http\HttpClient;
use Douyuxingchen\ScrmWecomApi\Utils\FinalResp;
use Douyuxingchen\ScrmWecomApi\Http\HttpRequest;
use Douyuxingchen\ScrmWecomApi\Http\HttpResponse;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestInterface;

class WbClient
{
    private $httpRequest;

    public function __construct()
    {
        $this->httpRequest = new HttpRequest();
    }

    public function request(WbBaseRequestInterface $request): FinalResp
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
        // error code
        $errCode = $respData['errcode'] ?? -100;
        // error message
        $errMsg = $respData['errmsg'] ?? 'failed';
        // 封装响应对象
        return FinalResp::getInstance()->setMessage($errMsg)->setCode($errCode)->setData($respData);
    }

    /**
     * @desc 处理请求地址
     * @param WbBaseRequestInterface $request
     */
    private function handleRequestConf(WbBaseRequestInterface $request)
    {
        $config     = $request->getConfig();
        $urlPath    = $request->getUrlPath();
        $requestUrl = $config->openRequestUrl . $urlPath;

        if ($request->isNeedToken()) {
            $reqToken   = (new WbAccessTokenBuilder)->generate($request);
            $requestUrl .= "?access_token=$reqToken";
        }

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

    public static function getInstance(): WbClient
    {

        if (!(self::$defaultInstance instanceof self)) {
            self::$defaultInstance = new self();
        }
        return self::$defaultInstance;
    }
}
