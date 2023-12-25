<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\group\broadcast\failed_list;

use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\JzBaseRequestAbstract;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\enum\Domain;

class JzChatBroadcastFailedListRequest extends JzBaseRequestAbstract
{

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return Domain::EX_API_BOT_RANGE . '/broadcast/failedList';
    }
}
