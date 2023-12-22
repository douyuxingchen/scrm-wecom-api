<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\customer_tag\add\param;


use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CustomerCorpTagAddRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/add_corp_tag';
    }
}
