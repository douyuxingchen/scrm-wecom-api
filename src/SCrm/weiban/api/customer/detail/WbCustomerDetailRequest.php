<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\detail;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbCustomerDetailRequest extends WbBaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/open-api/external_user/get';
    }
}
