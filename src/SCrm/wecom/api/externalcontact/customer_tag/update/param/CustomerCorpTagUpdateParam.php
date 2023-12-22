<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\customer_tag\udpate\param;

// 注意:修改后的标签组不能和已有的标签组重名，标签也不能和同一标签组下的其他标签重名。

class CustomerCorpTagUpdateParam
{
    // 必传 | 标签或标签组的id
    public $id;

    // 非必传 | 新的标签或标签组名称，最长为30个字符
    public $name;

    // 非必填 | 标签组次序值。order值大的排序靠前。有效的值范围是[0, 2^32)
    public $order;

    // 非必传 | 授权方安装的应用agentid。仅旧的第三方多应用套件需要填此参数
    public $agentid;
}
