<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer\remark;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class ExternalContactGetListRequest extends BaseRequestAbstract
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
