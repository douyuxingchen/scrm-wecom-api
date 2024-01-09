<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\staff\msg_send\param;

class WbStaffMsgSendParam
{
    /*
     * 非必传 | string | 企业微信员工id
     */
    public $staff_id;

    /*
     * 必传 | string | 消息类型，暂时只支持text，其他类型后续支持
     */
    public $msgtype;

    /*
     * 必传 | string | 消息内容，最长不超过2048个字节，超过将被截断。动态插入员工姓名或插入链接等进阶用法见下文
     */
    public $content;

}