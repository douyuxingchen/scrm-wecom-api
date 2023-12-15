<?php

namespace App\Library\SCRM\wecom\api\corp_tag\mark;


use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseAbstractRequest;

class CorpTagMarkRequest extends BaseAbstractRequest
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return "/cgi-bin/externalcontact/mark_tag";
    }
}
