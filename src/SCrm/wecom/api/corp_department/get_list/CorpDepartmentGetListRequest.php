<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\corp_department\get_list;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CorpDepartmentGetListRequest extends BaseRequestAbstract
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
