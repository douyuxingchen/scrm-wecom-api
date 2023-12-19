<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\corp_department\get_detail;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CorpDepartmentGetDetailRequest extends BaseRequestAbstract
{

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return "/cgi-bin/department/get";
    }
}
