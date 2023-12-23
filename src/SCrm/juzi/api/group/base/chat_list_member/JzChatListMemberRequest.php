<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\group\base\chat_list_member;

use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\JzBaseRequestAbstract;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\enum\Domain;

class JzChatListMemberRequest extends JzBaseRequestAbstract
{

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return Domain::EX_API_BOT_RANGE . '/room/list';
    }
}
