<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\group\broadcast\unsent_tasks;

use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\JzBaseRequestAbstract;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\enum\Domain;

class JzChatBroadcastUnsentTasksRequest extends JzBaseRequestAbstract
{

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return Domain::EX_API_BOT_RANGE . '/broadcast/list_unsent_tasks';
    }
}
