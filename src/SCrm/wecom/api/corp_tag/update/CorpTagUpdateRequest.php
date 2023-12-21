<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\corp_tag\udpate\param;


use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CorpTagUpdateRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/edit_corp_tag';
    }
}
