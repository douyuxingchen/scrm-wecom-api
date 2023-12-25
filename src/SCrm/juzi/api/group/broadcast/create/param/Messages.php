<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\group\broadcast\create\param;

class Messages
{
    /*
     * 必传 | number | 参考发送消息的messageType  https://docs.juzibot.com/group/message/#%E5%8F%91%E9%80%81%E6%B6%88%E6%81%AF
     */
    public $type;

    /*
     * 必传 | object | 参考发送消息的payload  https://docs.juzibot.com/group/message/#%E5%8F%91%E9%80%81%E6%B6%88%E6%81%AF
     */
    public $payload;

    /*
     * 非必传 | boolean | 表示该条消息是群公告（需保证一次群发只允许有一条群公告消息），只在type是群聊且机器人为群主时生效
     */
    public $isAnnouncement;

    /*
     * 非必传 | boolean | 表示该条消息是@所有人（需保证一次群发只允许有一条群公告消息），只在type是群聊且机器人为群主时生效
     */
    public $isAtAll;
}