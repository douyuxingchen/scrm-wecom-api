<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_chat_group\contact_way_add;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CustomerCloseTempChatRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/close_temp_chat';
    }
}
