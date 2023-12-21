<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\corp_staff\get_detail;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CorpStaffGetDetailRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/user/get';
    }
}
