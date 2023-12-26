<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\chat_list;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbCustomerChatListRequest extends WbBaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/open-api/external_user/group_list/get';
    }
}
