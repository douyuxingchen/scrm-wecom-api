<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\customer_tag\delete\param;

// tag_id和group_id不可同时为空。
// 如果一个标签组下所有的标签均被删除，则标签组会被自动删除。

class CustomerCorpTagDeleteParam
{
    // 非必传 | 数组 | 标签的id列表
    public $tag_id;

    // 非必传 | 数组 | 标签组的id列表
    public $group_id;

    // 非必传 | 授权方安装的应用agentid。仅旧的第三方多应用套件需要填此参数
    public $agentid;
}
