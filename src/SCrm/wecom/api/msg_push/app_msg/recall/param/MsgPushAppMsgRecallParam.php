<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\msg_push\app_msg\recall\param;

// 本接口可以撤回24小时内通过发送应用消息接口推送的消息，仅可撤回企业微信端的数据，微信插件端的数据不支持撤回。
class MsgPushAppMsgRecallParam
{
    /*
     * 必传 | 消息ID。从应用发送消息接口处获得。
     */
    public $msgid;
}