<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\corp_tag\get_list;


use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseAbstractRequest;

class CorpTagGetListRequest extends BaseAbstractRequest
{

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return "/cgi-bin/externalcontact/get_corp_tag_list";
    }
}
