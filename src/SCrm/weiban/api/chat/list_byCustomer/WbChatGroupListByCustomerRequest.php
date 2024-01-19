<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\chat\list_byCustomer;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbChatGroupListByCustomerRequest extends WbBaseRequestAbstract
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
