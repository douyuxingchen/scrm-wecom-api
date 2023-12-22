<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\chat_group\detail;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class ChatGroupDetailRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/groupchat/get';
    }
}
