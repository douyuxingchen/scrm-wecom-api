<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\chat_group\listing;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class ChatGroupListRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/groupchat/list';
    }
}
