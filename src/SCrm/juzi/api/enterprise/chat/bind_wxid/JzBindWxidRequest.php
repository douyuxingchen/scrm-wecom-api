<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\enterprise\chat\bind_wxid;

use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\JzBaseRequestAbstract;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\enum\Domain;

class JzBindWxidRequest extends JzBaseRequestAbstract
{

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return Domain::HUB_JZ_BOT . '/api/v1/groupChat/bindWxId';
    }
}
