<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\customer_acquisition\listing\param;

class CustomerAcquisitionListParam
{
    // 非必传 | 返回的最大记录数，整型，最大值100
    public $limit;

    // 非必传 | 用于分页查询的游标，字符串类型，由上一次调用返回，首次调用可不填
    public $cursor;
}
