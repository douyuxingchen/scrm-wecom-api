<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_acquisition\get_list;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseAbstractRequest;

class CustomerAcquisitionGetListRequest extends BaseAbstractRequest
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return "/cgi-bin/externalcontact/customer_acquisition/list_link";
    }
}
