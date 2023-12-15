<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_acquisition\create;


use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseAbstractRequest;

class CustomerAcquisitionCreateRequest extends BaseAbstractRequest
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return "/cgi-bin/externalcontact/customer_acquisition/create_link";
    }
}
