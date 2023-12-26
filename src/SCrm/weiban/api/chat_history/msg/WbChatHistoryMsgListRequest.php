<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\chat_history\msg;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbChatHistoryMsgListRequest extends WbBaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/open-api/chat/message/list';
    }
}
