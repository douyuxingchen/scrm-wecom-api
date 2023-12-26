<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\listing;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbCustomerListRequest extends WbBaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/open-api/external_user/list';
    }
}
