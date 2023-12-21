<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_acquisition\get_balance_quota;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class CustomerAcquisitionGetBalanceQuotaRequest extends BaseRequestAbstract
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
