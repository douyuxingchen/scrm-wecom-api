<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\chat_group\opengid_to_chatid;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class ChatGroupOpengidToChatIdRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/opengid_to_chatid';
    }
}
