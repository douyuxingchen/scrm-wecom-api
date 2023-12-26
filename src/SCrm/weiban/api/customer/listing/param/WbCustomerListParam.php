<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\listing\param;

class WbCustomerListParam
{
    /*
     * 非必传 | string | 企业微信员工id，若填写则只会返回该员工对应的客户(被员工删除的客户不展示)
     */
    public $staff_id;


    /*
     * 非必传 | string | 客户类型：1-为微信客户；2-为企业微信客户；若填写则只返回对应类型的客户。
     */
    public $type;

    /*
     * 非必传 | string | 客户手机号。若填写则只会返回该手机号对应的客户
     */
    public $phone_number;

    /*
     * 非必传 | string | 排序按照微伴系统收录时间升序或降序增加排序参数 order，可选值是 asc(升序) 和 desc(降序)，默认值是 asc
     */
    public $order;

    /*
     * 非必传 | string | 时间筛选开始时间，时间戳格式，例如:1592576435
     */
    public $start_time;

    /*
     * 非必传 | string | 时间筛选结束时间，时间戳格式，例如:1592576435
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