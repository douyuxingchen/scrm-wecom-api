<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\external_contact\get_follow_user_list;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class ExternalContactGetFollowUserListRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/get_follow_user_list';
    }
}
