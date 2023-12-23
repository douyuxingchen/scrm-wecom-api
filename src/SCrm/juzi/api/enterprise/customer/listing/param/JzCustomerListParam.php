<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\enterprise\customer\listing\param;

// TIP
// pageSize 每页数据条数, 不能超过1000。
class JzCustomerListParam
{
    /*
     * 必传 | number | 当前页数
     */
    public $current;

    /*
     * 必传 | number | 每页数据条数
     */
    public $pageSize;

    /*
     * 非必传 | string | 员工的userId（该参数为空时，返回所有客户数据，不为空时，返回当前员工下的客户数据）, 又名wxUserId
     */
    public $userId;
}