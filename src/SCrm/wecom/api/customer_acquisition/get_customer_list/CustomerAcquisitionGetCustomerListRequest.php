<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_acquisition\get_customer_list;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CustomerAcquisitionGetCustomerListRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/customer_acquisition/customer';
    }
}
