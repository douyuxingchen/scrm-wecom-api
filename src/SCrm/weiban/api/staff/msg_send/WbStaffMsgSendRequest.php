<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\staff\msg_send;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbStaffMsgSendRequest extends WbBaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/open-api/staff_message/send';
    }
}
