<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\corp_tag\add\param;


use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CorpTagAddRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/add_corp_tag';
    }
}
