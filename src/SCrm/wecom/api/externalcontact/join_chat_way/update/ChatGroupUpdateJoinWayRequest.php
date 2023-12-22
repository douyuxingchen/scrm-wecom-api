<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\join_chat_way\update;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class ChatGroupUpdateJoinWayRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/groupchat/update_join_way';
    }
}
