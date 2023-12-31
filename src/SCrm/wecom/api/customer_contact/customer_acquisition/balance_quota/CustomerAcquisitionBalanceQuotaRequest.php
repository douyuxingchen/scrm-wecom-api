<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\customer_acquisition\balance_quota;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CustomerAcquisitionBalanceQuotaRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/customer_acquisition_quota';
    }
}
