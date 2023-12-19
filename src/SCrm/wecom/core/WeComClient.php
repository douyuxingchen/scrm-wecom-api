<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core;


use Douyuxingchen\ScrmWecomApi\Http\HttpClient;
use Douyuxingchen\ScrmWecomApi\Http\HttpRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestInterface;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\token\CreateTokenRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\utils\SignUtil;
use Exception;

class WeComClient
{
    private $httpRequest;

    public function __construct()
    {
        $this->httpRequest = new HttpRequest();
    }

    /**
     * @param BaseRequestInterface $request
     * @return mixed
     * @throws Exception
     */
    public function request(BaseRequestInterface $request)
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

    public static function getInstance(): WeComClient
    {

        if (!(self::$defaultInstance instanceof self)) {
            self::$defaultInstance = new self();
        }
        return self::$defaultInstance;
    }

    private function getReqUrl(BaseRequestInterface $request): string
    {
        $config     = $request->getConfig();
        if(!$config){
            dd($request);
        }
        $urlPath    = $request->getUrlPath();
        $requestUrl = $config->openRequestUrl . $urlPath;

        if (!$request instanceof CreateTokenRequest) {
            $accountToken = (new AccessTokenBuilder)->generate($request);
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
