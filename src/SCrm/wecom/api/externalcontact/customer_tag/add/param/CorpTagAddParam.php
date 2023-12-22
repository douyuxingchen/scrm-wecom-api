<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\customer_tag\add\param;

// 若tag_id和group_id均为空，则返回所有标签。

// 同时传递tag_id和group_id时，忽略tag_id，仅以group_id作为过滤条件。

class CorpTagAddParam
{
    // 非必传 | 标签组id
    public $group_id;

    // 非必传 | 标签组名称，最长为30个字符
    public $group_name;

    // 非必填 | 标签组次序值。order值大的排序靠前。有效的值范围是[0, 2^32)
    public $order;

    // 必传 | tag.name添加的标签名称，最长为30个字符,,tag.order标签次序值。order值大的排序靠前。有效的值范围是[0, 2^32)
    public $tag;

    // 非必传 | 授权方安装的应用agentid。仅旧的第三方多应用套件需要填此参数
    public $agentid;
}
