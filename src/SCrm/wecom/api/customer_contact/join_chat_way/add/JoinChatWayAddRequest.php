<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\join_chat_way\add;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class JoinChatWayAddRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/groupchat/add_join_way';
    }
}
