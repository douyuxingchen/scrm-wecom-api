<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\corp_staff\get_id_list;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CorpStaffGetIdListRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return "/cgi-bin/user/list_id";
    }
}
