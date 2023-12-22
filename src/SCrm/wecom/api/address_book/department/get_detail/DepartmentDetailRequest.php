<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\department\get_detail;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class DepartmentDetailRequest extends BaseRequestAbstract
{

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/department/get';
    }
}
