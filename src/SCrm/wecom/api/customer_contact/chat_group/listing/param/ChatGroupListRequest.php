<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\chat_group\listing\param;

class ChatGroupListRequest
{
    /*
     * 非必传 | 客户群跟进状态过滤
     *      0 - 所有列表(即不过滤)
     *      1 - 离职待继承
     *      2 - 离职继承中
     *      3 - 离职继承完成
     *      默认为0
    */
    public $status_filter;

    /*
     * 非必传 | 群主过滤，如果不填，表示获取应用可见范围内全部群主的数据（但是不建议这么用，如果可见范围人数超过1000人，为了防止数据包过大，会报错 81017）
     * owner_filter.userid_list 用户ID列表。最多100个
     */
    public $owner_filter;

    /*
     * 非必传 | 用于分页查询的游标，字符串类型，由上一次调用返回，首次调用不填
     */
    public $cursor;

    /*
     * 非必传 | 分页，预期请求的数据量，取值范围 1 ~ 1000
     */
    public $limit;
}
