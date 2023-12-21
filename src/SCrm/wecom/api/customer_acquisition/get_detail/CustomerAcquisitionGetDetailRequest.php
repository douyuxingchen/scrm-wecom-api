<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_acquisition\get_detail;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CustomerAcquisitionGetDetailRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/customer_acquisition/get';
    }
}
