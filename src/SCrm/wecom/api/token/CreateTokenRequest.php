<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\token;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseAbstractRequest;

class CreateTokenRequest extends BaseAbstractRequest
{
    public function getMethod(): string
    {
        return 'POST';
    }

    //通用方法
    public function getUrlPath(): string
    {
        return "/cgi-bin/gettoken";
    }
}
