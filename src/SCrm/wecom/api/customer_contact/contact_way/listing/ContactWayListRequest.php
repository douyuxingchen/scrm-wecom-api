<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\contact_way\listing;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class ContactWayListRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/list_contact_way';
    }
}
