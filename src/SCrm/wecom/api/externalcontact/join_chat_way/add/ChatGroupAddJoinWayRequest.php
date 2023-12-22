<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\join_chat_way\add;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class ChatGroupAddJoinWayRequest extends BaseRequestAbstract
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
