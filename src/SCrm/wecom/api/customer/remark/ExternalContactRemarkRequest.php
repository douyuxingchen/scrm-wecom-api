<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer\get_list;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class ExternalContactRemarkRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/remark';
    }
}