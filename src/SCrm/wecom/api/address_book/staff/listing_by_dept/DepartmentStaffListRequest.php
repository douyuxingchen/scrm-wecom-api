<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\staff\listing_by_dept;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class DepartmentStaffListRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/user/simplelist';
    }
}
