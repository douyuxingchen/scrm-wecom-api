<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\msg_push\app_msg\send\param;

class MsgPushAppMsgSendBaseParam
{
    // 指定接收消息的成员，成员ID列表（多个接收者用‘|’分隔，最多支持1000个）。指定为"@all"，则向该企业应用的全部成员发送
    public $touser;

    // 指定接收消息的部门，部门ID列表，多个接收者用‘|’分隔，最多支持100个。当touser为"@all"时忽略本参数
    public $toparty;

    // 指定接收消息的标签，标签ID列表，多个接收者用‘|’分隔，最多支持100个。当touser为"@all"时忽略本参数
    public $totag;

    // 企业应用的id，整型。企业内部开发
    public $agentid;

    // 表示是否是保密消息，0表示可对外分享，1表示不能分享且内容显示水印，默认为0
    public $safe;

    // 表示是否开启id转译，0表示否，1表示是，默认0。仅第三方应用需要用到，企业自建应用可以忽略
    public $enable_id_trans;

    // 表示是否开启重复消息检查，0表示否，1表示是，默认0
    public $enable_duplicate_check;

    // 表示是否重复消息检查的时间间隔，默认1800s，最大不超过4小时
    public $duplicate_check_interval;

    protected function __construct()
    {
        // 默认开启消息重复检查
        $this->enable_duplicate_check   = 1;
        $this->duplicate_check_interval = 1800;
        // 默认值 企业应用的id
        $this->agentid = config('qy_weixin.passport.agent_id');
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }

    public function toJson(): string
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
}
