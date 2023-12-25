<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\group\broadcast\cancel;

use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\JzBaseRequestAbstract;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\enum\Domain;

class JzChatBroadcastCancelRequest extends JzBaseRequestAbstract
{

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return Domain::EX_API_BOT_RANGE . '/broadcast/cancel';
    }
}
