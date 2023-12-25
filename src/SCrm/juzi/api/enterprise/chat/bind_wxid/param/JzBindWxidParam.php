<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\enterprise\chat\bind_wxid\param;

class JzBindWxidParam
{
    /*
     * 必传 | string | 企业控制台ID = wecomChatId
     */
    public $jkbChatId;

    /*
     * 必传 | string | 微信群官方ID = roomWxid
     */
    public $wxId;
}