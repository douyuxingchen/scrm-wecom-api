<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\staff\listing\param;

class WbStaffListParam
{
    /*
     * 非必传 | string | 开始时间 示例值:1640833484
     */
    public $start_time;

    /*
     * 非必传 | string | 结束时间 示例值:1640833484
     */
    public $end_time;

    /*
     * 非必传 | string | 列表返回长度。默认值为30，最大值为100
     */
    public $limit;

    /*
     * 非必传 | string | 列表偏移。用于迭代获取所有数据，默认值为0
     */
    public $offset;

}