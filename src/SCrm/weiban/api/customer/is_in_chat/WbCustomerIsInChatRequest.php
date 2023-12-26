<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\is_in_chat;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbCustomerIsInChatRequest extends WbBaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/open-api/group_chat/find_external_user';
    }
}
