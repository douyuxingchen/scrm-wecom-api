<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\msg_push\app_msg\recall;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

// 本接口可以撤回24小时内通过发送应用消息接口推送的消息，仅可撤回企业微信端的数据，微信插件端的数据不支持撤回。
class MsgPushAppMsgRecallRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/message/recall';
    }
}
