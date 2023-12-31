<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\contact_way\update;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class ContactWayUpdateRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/update_contact_way';
    }
}
