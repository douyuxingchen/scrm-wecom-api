<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\corp_tag\add\param;


use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseAbstractRequest;

class CorpTagAddRequest extends BaseAbstractRequest
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return "/cgi-bin/externalcontact/add_corp_tag";
    }
}
