<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\staff\id_listing;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class StaffIdListRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/user/list_id';
    }
}
