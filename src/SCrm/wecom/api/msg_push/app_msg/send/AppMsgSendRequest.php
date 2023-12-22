<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\msg_push\app_msg\send;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class AppMsgSendRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/message/send';
    }
}
