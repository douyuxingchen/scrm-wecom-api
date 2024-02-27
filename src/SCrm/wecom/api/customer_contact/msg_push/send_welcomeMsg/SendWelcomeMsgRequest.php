<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\msg_push\send_welcomeMsg;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class SendWelcomeMsgRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/send_welcome_msg';
    }
}
