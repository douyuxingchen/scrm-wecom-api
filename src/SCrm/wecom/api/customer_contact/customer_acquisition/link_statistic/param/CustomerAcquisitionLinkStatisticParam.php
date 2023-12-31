<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\customer_acquisition\link_statistic\param;

class CustomerAcquisitionLinkStatisticParam
{

    // 必传 | 获客链接的id
    public $link_id;

    // 必传 | 统计起始时间戳
    public $start_time;

    // 必传 | 统计结束时间戳
    public $end_time;
}