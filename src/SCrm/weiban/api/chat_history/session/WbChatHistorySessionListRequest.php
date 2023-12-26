<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\chat_history\session;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbChatHistorySessionListRequest extends WbBaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/open-api/chat/session/list';
    }
}
