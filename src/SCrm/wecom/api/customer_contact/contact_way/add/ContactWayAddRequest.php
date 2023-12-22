<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\contact_way\add;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class ContactWayAddRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/add_contact_way';
    }
}
