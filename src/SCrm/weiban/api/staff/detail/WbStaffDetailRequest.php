<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\staff\detail;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbStaffDetailRequest extends WbBaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/open-api/staff/get';
    }
}
