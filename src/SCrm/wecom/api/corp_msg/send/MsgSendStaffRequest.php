<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\corp_msg\send;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class MsgSendStaffRequest extends BaseRequestAbstract
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
