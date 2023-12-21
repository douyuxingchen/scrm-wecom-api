<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\external_contact\get_list\remark;

class ExternalContactRemarkParam
{
    // 必传 | 企业成员的userid
    public $userid;

    // 必须 | 外部联系人userid
    public $external_userid;

    // 非必传 | 此用户对外部联系人的备注，最多20个字符
    public $remark;

    // 非必传 | 此用户对外部联系人的描述，最多150个字符
    public $description;

    // 非必传 | 此用户对外部联系人备注的所属公司名称，最多20个字符
    public $remark_company;

    // 非必传 | 此用户对外部联系人备注的手机号
    public $remark_mobiles;

    // 非必传 | 备注图片的mediaid，
    public $remark_pic_mediaid;
}
