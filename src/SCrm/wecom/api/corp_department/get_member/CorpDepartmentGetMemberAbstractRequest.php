<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\corp_department\get_member;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CorpDepartmentGetMemberAbstractRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return "/cgi-bin/user/simplelist";
    }
}
