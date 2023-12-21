<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_chat_group\contact_way_get;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CustomerGetJoinWayRequest extends BaseRequestAbstract
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
