<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\customer_tag\delete\param;


use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CustomerCorpTagDeleteRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/del_corp_tag';
    }
}
