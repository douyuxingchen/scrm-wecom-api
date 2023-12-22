<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\join_chat_way\delete;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class JoinChatWayDeleteRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/groupchat/del_join_way';
    }
}
