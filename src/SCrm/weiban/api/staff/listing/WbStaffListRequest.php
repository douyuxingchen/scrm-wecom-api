<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\staff\listing;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbStaffListRequest extends WbBaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/open-api/staff/list';
    }
}
