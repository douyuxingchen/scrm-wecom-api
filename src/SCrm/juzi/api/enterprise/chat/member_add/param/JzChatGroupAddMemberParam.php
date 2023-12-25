<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\enterprise\chat\member_add\param;

class JzChatGroupAddMemberParam
{
    /*
     * 请求示例
        {
          "botUserId": "testUserId",
          "contactWxid": "7888888888",
          "roomWxid": "R:888888"
        }
     */

    /*
     * 必传 | string | 需要执行添加的托管微信的userId, =wxUserId
     */
    public $botUserId;

    /*
     * 必传 | string | 需要被添加的群成员的wxid
     */
    public $contactWxid;

    /*
     * 必传 | string | 需要被添加的群的wxid
     */
    public $roomWxid;

}