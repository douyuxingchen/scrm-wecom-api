<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core;


use Douyuxingchen\ScrmWecomApi\Http\HttpClient;
use Douyuxingchen\ScrmWecomApi\Http\HttpRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\RequestInterface;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\utils\SignUtil;
use Exception;

class WeComClient
{
    private $httpClient;

    function __construct()
    {
        $this->httpClient = HttpClient::getInstance();
    }

    /**
     * @param RequestInterface $request
     * @return mixed
     * @throws Exception
     */
    public function request(RequestInterface $request)
    {
        $params  = $request->getParam();
        $config  = $request->getConfig();
        $urlPath = $request->getUrlPath();
        $method  = strtolower($request->getMethod());

        $openHost     = $config->openRequestUrl;
        $accountToken = (new AccessTokenBuilder)->generate($request);
        $requestUrl   = $openHost . $urlPath . "?access_token=$accountToken";

        $httpRequest = new HttpRequest();
        //发送http请求
        $httpRequest->url            = $requestUrl;
        $httpRequest->readTimeout    = $config->httpReadTimeout;
        $httpRequest->connectTimeout = $config->httpConnectTimeout;


        if ($method == 'get') {
            $httpRequest->url .= $params ? ('&' . http_build_query(get_object_vars($params))) : '';
        } else {
            $httpRequest->body = SignUtil::marshal($params);
        }

        $httpResponse = $this->httpClient->$method($httpRequest);

        return json_decode($httpResponse->body, false, 512, JSON_UNESCAPED_UNICODE);
    }

    private static $defaultInstance;

    public static function getInstance()
    {

        if (!(self::$defaultInstance instanceof self)) {
            self::$defaultInstance = new self();
        }
        return self::$defaultInstance;
    }

}
