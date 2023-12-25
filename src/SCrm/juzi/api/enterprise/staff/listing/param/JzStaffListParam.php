<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\enterprise\staff\listing\param;

// TIP
// pageSize 每页数据条数, 不能超过1000。
class JzStaffListParam
{
    /*
     * 必传 | number | 当前页数
     */
    public $current;

    /*
     * 必传 | number | 每页数据条数
     */
    public $pageSize;

}