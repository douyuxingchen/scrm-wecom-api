<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\group\broadcast\delete;

use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\JzBaseRequestAbstract;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\enum\Domain;

class JzChatBroadcastDeleteRequest extends JzBaseRequestAbstract
{

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return Domain::EX_API_BOT_RANGE . '/broadcast/delete';
    }
}
