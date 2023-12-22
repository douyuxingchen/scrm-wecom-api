<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\contact_way\get_list\param;

class ContactWayListParam
{
    /*
     * 非必传 | 「联系我」创建起始时间戳, 默认为90天前
     */
    public $start_time;

    /*
     * 非必传 | 「联系我」创建结束时间戳, 默认为当前时间
     */
    public $end_time;

    /*
     * 非必传 | 「分页查询使用的游标，为上次请求返回的 next_cursor
     */
    public $cursor;

    /*
     * 非必传 | 每次查询的分页大小，默认为100条，最多支持1000条
     */
    public $limit;
}
