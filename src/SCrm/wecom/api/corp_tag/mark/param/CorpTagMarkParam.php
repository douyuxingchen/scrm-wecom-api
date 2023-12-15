<?php

namespace App\Library\SCRM\wecom\api\corp_tag\mark\param;

class CorpTagMarkParam
{
    // 添加外部联系人的userid
    public $userid;

    // 外部联系人userid
    public $external_userid;

    // 要标记的标签列表
    public $add_tag;

    // 要移除的标签列表
    public $remove_tag;
}
