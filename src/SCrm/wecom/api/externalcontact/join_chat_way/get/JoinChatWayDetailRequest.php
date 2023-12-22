<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\join_chat_way\get;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class JoinChatWayDetailRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/groupchat/get_join_way';
    }
}
