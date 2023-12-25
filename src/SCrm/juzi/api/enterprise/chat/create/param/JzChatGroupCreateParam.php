<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\enterprise\chat\create\param;

class JzChatGroupCreateParam
{
    /*
     * 请求示例
       {
          "botUserId": "testUserId",
          "userIds": [
            "zhangsan"
          ],
          "unionIds": [
            "ozynqsulJFCZ2z1aYeS8h-nuasdAAA"
          ],
          "name": "create",
          "greeting": "大家好，这个是新的群",
          "externalUserIds": [
            "wmrRhyBgAA6PKOL7IA2Nbikedjxxxxxx",
            "wmrRhyBgAANQ1O34HRXfVQh17exxxxxx"
          ]
        }
     */

    /*
     * 必传 | string | 需要执行建群的托管微信的userId, 详见wxUserId
     */
    public $botUserId;

    /*
     * 必传 | array | 建群时需要拉入的企业成员的userId, 详见wxUserId
     */
    public $userIds;

    /*
     * 非必传 | array | 建群时需要拉取的外部联系人的unionId
     */
    public $unionIds;

    /*
     * 非必传 | string | 建群后新的群的名字
     */
    public $name;

    /*
     * 必传 | string | 建群后的激活语
     */
    public $greeting;

    /*
     * 非必传 | array | 建群时需要拉取的联系人的externalUserId
     */
    public $externalUserIds;
}