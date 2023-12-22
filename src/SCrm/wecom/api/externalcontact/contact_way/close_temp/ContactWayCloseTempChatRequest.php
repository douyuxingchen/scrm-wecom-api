<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\contact_way\close_temp;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class ContactWayCloseTempChatRequest extends BaseRequestAbstract
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
