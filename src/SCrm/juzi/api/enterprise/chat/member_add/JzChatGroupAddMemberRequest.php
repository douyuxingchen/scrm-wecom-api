<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\enterprise\chat\member_add;

use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\JzBaseRequestAbstract;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\enum\Domain;

class JzChatGroupAddMemberRequest extends JzBaseRequestAbstract
{

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return Domain::HUB_JZ_BOT . '/api/v1/instantReply/addFromRoom';
    }
}
