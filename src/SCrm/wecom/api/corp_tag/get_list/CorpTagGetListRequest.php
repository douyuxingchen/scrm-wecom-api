<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\corp_tag\get_list;


use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CorpTagGetListRequest extends BaseRequestAbstract
{

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/get_corp_tag_list';
    }
}
