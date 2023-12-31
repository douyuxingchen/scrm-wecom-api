<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\service_personnel\follow_user_list;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class FollowUserListRequest extends BaseRequestAbstract
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
