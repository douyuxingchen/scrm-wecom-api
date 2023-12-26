<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\chat\member_list;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbChatGroupMemberListRequest extends WbBaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/open-api/group_chat/member/list';
    }
}
