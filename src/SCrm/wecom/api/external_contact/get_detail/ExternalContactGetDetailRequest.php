<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\external_contact\get_detail;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class ExternalContactGetDetailRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/get';
    }
}
