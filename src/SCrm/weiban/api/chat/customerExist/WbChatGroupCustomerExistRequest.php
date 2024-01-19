<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\chat\customerExist;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbChatGroupCustomerExistRequest extends WbBaseRequestAbstract
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
