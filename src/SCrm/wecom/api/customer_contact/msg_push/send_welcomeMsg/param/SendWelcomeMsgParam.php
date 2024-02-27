<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\msg_push\send_welcomeMsg\param;

class SendWelcomeMsgParam
{
    /*
     * 必传 | 通过添加外部联系人事件推送给企业的发送欢迎语的凭证，有效期为20秒
     */
    public $welcome_code;

    /*
     * 非必传 | 消息文本内容 | 详见Text文件说明
     */
    public $text;

    /*
     * 非必传 | 附件，最多可添加9个附件 | 详见Attachments文件说明
     */
    public $attachments;
}