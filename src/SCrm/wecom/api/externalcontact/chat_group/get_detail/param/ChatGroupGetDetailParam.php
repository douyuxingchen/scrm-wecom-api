<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\chat_group\get_detail\param;

class ChatGroupGetDetailParam
{
    /*
     * 必传 | 客户群ID
     */
    public $chat_id;

    /*
     * 非必传 | 是否需要返回群成员的名字group_chat.member_list.name。0-不返回；1-返回。默认不返回
     */
    public $need_name;
}
