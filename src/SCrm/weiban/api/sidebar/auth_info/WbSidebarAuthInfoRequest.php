<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\sidebar\auth_info;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbSidebarAuthInfoRequest extends WbBaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/open-api/open_auth/sidebar/get_auth_info';
    }
}