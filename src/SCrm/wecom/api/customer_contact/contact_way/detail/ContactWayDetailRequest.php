<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\contact_way\detail;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class ContactWayDetailRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/get_contact_way';
    }
}
