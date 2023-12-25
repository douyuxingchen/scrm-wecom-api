<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\core;


use Douyuxingchen\ScrmWecomApi\Http\HttpClient;
use Douyuxingchen\ScrmWecomApi\Http\HttpRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\token\WbCreateTokenRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestInterface;
use Douyuxingchen\ScrmWecomApi\Utils\SignUtil;
use Exception;

class WbClient
{
    private $httpRequest;

    public function __construct()
    {
        $this->httpRequest = new HttpRequest();
    }

    /**
     * @param WbBaseRequestInterface $request
     * @return mixed
     * @throws Exception
     */
    public function request(WbBaseRequestInterface $request)
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

    public static function getInstance(): WbClient
    {

        if (!(self::$defaultInstance instanceof self)) {
            self::$defaultInstance = new self();
        }
        return self::$defaultInstance;
    }

    private function getReqUrl(WbBaseRequestInterface $request): string
    {
        $config     = $request->getConfig();
        $urlPath    = $request->getUrlPath();
        $requestUrl = $config->openRequestUrl . $urlPath;

        if (!$request instanceof WbCreateTokenRequest) {
            $accountToken = (new WbAccessTokenBuilder)->generate($request);
            $requestUrl   .= "?access_token=$accountToken";
        }
        return $requestUrl;
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
