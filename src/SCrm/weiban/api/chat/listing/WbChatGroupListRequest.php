<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\chat\listing;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbChatGroupListRequest extends WbBaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/open-api/group_chat/list';
    }
}
