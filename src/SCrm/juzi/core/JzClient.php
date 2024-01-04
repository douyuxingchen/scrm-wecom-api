<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\core;


use Douyuxingchen\ScrmWecomApi\Http\HttpClient;
use Douyuxingchen\ScrmWecomApi\Http\HttpRequest;
use Douyuxingchen\ScrmWecomApi\Http\HttpResponse;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\JzBaseRequestInterface;
use Douyuxingchen\ScrmWecomApi\Utils\FinalResp;
use Douyuxingchen\ScrmWecomApi\Utils\SignUtil;

class JzClient
{
    private $httpRequest;

    public function __construct()
    {
        $this->httpRequest = new HttpRequest();
    }

    public function request(JzBaseRequestInterface $request): FinalResp
    {
        $params = $request->getParam();
        $config = $request->getConfig();
        $method = strtolower($request->getMethod());

        $this->httpRequest->url            = $this->getReqUrl($request);
        $this->httpRequest->readTimeout    = $config->httpReadTimeout;
        $this->httpRequest->connectTimeout = $config->httpConnectTimeout;

        $this->splicingParameters($method, $params);

        $httpResponse = HttpClient::getInstance()->$method($this->httpRequest);

        return $this->finalResponse($httpResponse);
    }

    private function finalResponse(HttpResponse $httpResponse): FinalResp
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

    private function getReqUrl(JzBaseRequestInterface $request): string
    {
        $config     = $request->getConfig();
        $requestUrl = $request->getUrlPath();
        return $requestUrl . "?token={$config->token}";
    }

    private function splicingParameters(string $method, $params)
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
