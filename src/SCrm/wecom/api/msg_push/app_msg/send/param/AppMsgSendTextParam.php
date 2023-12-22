<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\msg_push\app_msg\send\param;

class AppMsgSendTextParam extends AppMsgSendBaseParam
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
