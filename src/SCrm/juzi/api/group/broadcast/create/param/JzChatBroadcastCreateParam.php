<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\group\broadcast\create\param;

class JzChatBroadcastCreateParam
{
    /*
     * 请求示例
     {
        "id": "5c69d33cac3d075a57657ed6",
        "messages": [{
          "type": 0, // MessageType, check below
          "payload": {
            "text": "你好啊，我是商务", // message content
            "mention": ["wxid_rr9ej1o8xv9h21"], // mention list, when send message to room, can set mention list, nullable
          },
          "isAnnouncement": false,
          "isAtAll": false,
        }],
        "scheduledTimestamp": 1597903969925,
        "members": [{
          "botUserId": "5d0c86971150c017984cee66",
          "wxids": ["788748399949943"],
          "unionIds": ["ozynqsulJFCZ2z1aYeS8h-nuasdAAA"],
          "externalUserIds": ["wmrRhyBgAAdGSL2peFY7R91imak0gTmg"],
        }],
        "hasMore": false,
        "type": 5
    }
     */

    /*
     * 非必传 | string | 群发id，分页后续必传
     */
    public $id;

    /*
     * 非必传 | string | 自定义群发名称
     */
    public $title;

    /*
     * 必传 | string | 5私聊 6群聊
     */
    public $type;

    /*
     * 非必传 | boolean | 当分页时为true，最后一个是false或者不传
     */
    public $hasMore;

    /*
     * 非必传 | number | （毫秒）当定时任务时必传，否则不传
     */
    public $scheduledTimestamp;

    /*
     * 非必传 | array | 当hseMore不传或者为false时，必须存在一组messages,多存在多组时,后面会覆盖前面的messages
     */
    public $messages;

    /*
     * 必传 | array | 发送对象
     */
    public $members;


}
