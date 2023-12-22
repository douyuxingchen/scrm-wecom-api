<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\department\listing;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class DepartmentListRequest extends BaseRequestAbstract
{

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/department/list';
    }
}
