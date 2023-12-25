<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\group\broadcast\create\param;

class JzChatBroadcastCreateParam
{
    /*
        TIPS
        若使用unionId方式创建群发，需确认秒回端客户已完成union ID打通，可通过回调或者通过接口获取到chatId进行打通确认
        创建群发接口需要说明最大传入的wxid或者unionId的总长度为1000，如果需要群发超过1000人，则需要重复调用接口来传入数据。 创建群发任务，当人数过多时需要分页。通过hasMore字段传入true, 会将多组成员数据组合在一起。
        多次调用接口创建群发时，非第一次调用接口时，需要带着id的参数，否则会创建出多个独立的群发。
        多次调用接口创建任务时，后传入的messages字段会覆盖之前传入的值。当接收到hasMore为false或不存在时，为结束标志。
        当群发任务全部成功时，会自动归档。当群发任务有失败的对象时，不会自动归档，需调用取消api接口或者在群发界面点击取消按钮。
        每一次接收到messages，都会在公司话术的"api群发"组中新建一个素材，便于界面显示以及后续对于群发详细信息进行复核。
        分页创建群发时需要在10分钟内完成。
     */
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
