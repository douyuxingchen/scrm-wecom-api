<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\enterprise\wxid_to_externalUserId\listing;

use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\JzBaseRequestAbstract;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\enum\Domain;

class JzWxidToExternalUserIdRequest extends JzBaseRequestAbstract
{

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return Domain::HUB_JZ_BOT . '/api/v1/customer/wxid_to_externalUserId';
    }
}
