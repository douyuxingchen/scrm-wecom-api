<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\enterprise\customer\externalUserId_to_wxid;

use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\JzBaseRequestAbstract;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\enum\Domain;

class JzExternalUserIdToWxidRequest extends JzBaseRequestAbstract
{

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return Domain::HUB_JZ_BOT . '/api/v1/customer/externalUserId_to_wxid';
    }
}
