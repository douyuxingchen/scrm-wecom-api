<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\customer_tag\get_list\param;


// 若tag_id和group_id均为空，则返回所有标签。

// 同时传递tag_id和group_id时，忽略tag_id，仅以group_id作为过滤条件。

class CustomerCorpTagListParam
{
    // 要查询的标签id
    public $tag_id;

    // 要查询的标签组id，返回该标签组以及其下的所有标签信息
    public $group_id;
}
