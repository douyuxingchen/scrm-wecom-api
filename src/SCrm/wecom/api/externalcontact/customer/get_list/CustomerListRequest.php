<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\customer\remark;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CustomerListRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/list';
    }
}
