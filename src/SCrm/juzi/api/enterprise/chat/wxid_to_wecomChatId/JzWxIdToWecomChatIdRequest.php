<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\enterprise\chat\wxid_to_wecomChatId;

use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\JzBaseRequestAbstract;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\enum\Domain;

class JzWxIdToWecomChatIdRequest extends JzBaseRequestAbstract
{

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return Domain::HUB_JZ_BOT . '/api/v1/groupChat/wxid_to_wecomChatId';
    }
}
