<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\contact_way\listing;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbContactWayListRequest extends WbBaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/open-api/contact_way/list';
    }
}
