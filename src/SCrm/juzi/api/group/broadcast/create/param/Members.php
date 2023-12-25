<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\group\broadcast\create\param;

class Members
{
    /*
     * 必传 | string | 机器人的userId, 详见wxUserId
     */
    public $botUserId;

    /*
     * 必传 和unionIds、externalUserIds三选一 | array | 该机器人发送对象的wxid列表,多组时会整合去重. 当wxids存在时, unionId无效, 详见contactWxid
     */
    public $wxids;

    /*
     * 非必传 和wxids、externalUserIds三选一 | array | 该机器人发送对象的unionId列表,多组时会整合去重. 当wxids存在时, unionId无效, 详见unionId
     */
    public $unionIds;

    /*
     * 非必传 和wxids、unionIds三选一 | array | 该机器人发送对象的externalUserId列表,多组时会整合去重.详见externalUserId
     */
    public $externalUserIds;
}