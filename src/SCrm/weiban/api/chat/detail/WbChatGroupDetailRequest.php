<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\chat\detail;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbChatGroupDetailRequest extends WbBaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/open-api/group_chat/detail';
    }
}
