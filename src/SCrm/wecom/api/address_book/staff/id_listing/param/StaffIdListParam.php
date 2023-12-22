<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\staff\id_listing\param;

class StaffIdListParam
{
    // 用于分页查询的游标，字符串类型，由上一次调用返回，首次调用不填
    public $cursor;

    // 分页，预期请求的数据量，取值范围 1 ~ 10000
    public $limit = 100;
}
