<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\join_chat_way\update\param;

// room_base_name 和 room_base_id 两个参数配合，用于指定自动新建群的群名
// 例如，假如 room_base_name = "销售客服群", room_base_id = 10
// 那么，自动创建的第一个群，群名为“销售客服群10”；自动创建的第二个群，群名为“销售客服群11”，依次类推
class JoinChatWayUpdateParam
{
    /*
     * 必传 | 企业联系方式的配置id
     */
    public $config_id;

    /*
     * 必传 | 场景
     *      1-群的小程序插件
     *      2-群的二维码插件
     */
    public $scene;

    /*
     * 非必传 | 联系方式的备注信息，用于助记，超过30个字符将被截断
     */
    public $remark;

    /*
     * 非必传 | 当群满了后，是否自动新建群。0-否；1-是。 默认为1
     */
    public $auto_create_room;

    /*
     * 非必传 | 自动建群的群名前缀，当auto_create_room为1时有效。最长40个utf8字符
     */
    public $room_base_name;

    /*
     * 非必传 | 自动建群的群起始序号，当auto_create_room为1时有效
     */
    public $room_base_id;

    /*
     * 必传 | 数组 | 使用该配置的客户群ID列表，最多支持5个。
     */
    public $chat_id_list;

    /*
     * 非必传 |
     * 企业自定义的state参数，用于区分不同的入群渠道。不超过30个UTF-8字符；
     * 如果有设置此参数，在调用获取客户群详情接口时会返回每个群成员对应的该参数值，详见文末；
     */
    public $state;
}
