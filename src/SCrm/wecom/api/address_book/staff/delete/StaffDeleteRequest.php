<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\staff\delete;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class StaffDeleteRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/user/delete';
    }
}
