<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\corp_tag\delete\param;


use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CorpTagDeleteRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/del_corp_tag';
    }
}
