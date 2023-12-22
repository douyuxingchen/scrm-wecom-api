<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\contact_way\delete;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CustomerDeleteContactWayRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/del_contact_way';
    }
}