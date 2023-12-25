<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\contact_way\listing\param;

class WbContactWayListParam
{
    /*
     * 非必传 | string | 员工id
     */
    public $staff_id;

    /*
     * 非必传 | string | 排序按照创建时间升序或降序。可选值是 asc(升序) 和 desc(降序)，默认值是 asc
     */
    public $order;

    /*
     * 非必传 | string | 列表返回长度。默认值为30，最大值为100
     */
    public $limit;

    /*
     * 非必传 | string | 列表偏移。用于迭代获取所有数据，默认值为0
     */
    public $offset;

}