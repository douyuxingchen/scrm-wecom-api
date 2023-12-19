<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\corp_msg\send\param;

class MsgSendStaffTextParam extends MsgSendStaffBaseParam
{
    public $msgtype;
    public $text;

    public function setText(string $content)
    {
        $this->text = ['content' => $content];
    }

    public function __construct()
    {
        parent::__construct();
        // 文本固定消息类型
        $this->msgtype = 'text';
    }
}
