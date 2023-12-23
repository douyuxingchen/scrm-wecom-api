<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\core;


use Douyuxingchen\ScrmWecomApi\Http\HttpClient;
use Douyuxingchen\ScrmWecomApi\Http\HttpRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\JzBaseRequestInterface;
use Douyuxingchen\ScrmWecomApi\Utils\SignUtil;
use Exception;

class JzClient
{
    private $httpRequest;

    public function __construct()
    {
        $this->httpRequest = new HttpRequest();
    }

    /**
     * @param JzBaseRequestInterface $request
     * @return mixed
     * @throws Exception
     */
    public function request(JzBaseRequestInterface $request)
    {
        $params = $request->getParam();
        $config = $request->getConfig();
        $method = strtolower($request->getMethod());

        $this->httpRequest->url            = $this->getReqUrl($request);
        $this->httpRequest->readTimeout    = $config->httpReadTimeout;
        $this->httpRequest->connectTimeout = $config->httpConnectTimeout;

        $this->splicingParameters($method, $params);

        $httpResponse = HttpClient::getInstance()->$method($this->httpRequest);

        return json_decode($httpResponse->body, false, 512, JSON_UNESCAPED_UNICODE);
    }

    private static $defaultInstance;

    public static function getInstance(): JzClient
    {

        if (!(self::$defaultInstance instanceof self)) {
            self::$defaultInstance = new self();
        }
        return self::$defaultInstance;
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
}
