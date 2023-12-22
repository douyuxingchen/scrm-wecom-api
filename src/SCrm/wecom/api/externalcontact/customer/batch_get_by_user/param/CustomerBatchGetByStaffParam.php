<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\customer\batch_get_by_user\param;

class CustomerBatchGetByStaffParam
{
    // 必传 | 数组 | 企业成员的userid列表，字符串类型，最多支持100个
    public $userid_list;

    // 非必传 | 返回的最大记录数，整型，最大值100，默认值50，超过最大值时取最大值
    public $limit;

    // 非必传 | 用于分页查询的游标，字符串类型，由上一次调用返回，首次调用可不填
    public $cursor;
}
