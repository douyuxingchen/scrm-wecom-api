<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\chat\member_list\param;

class WbChatGroupMemberListParam
{
    /*
     * 必传 | string | 群聊id
     */
    public $group_chat_id;

    /*
     * 必传 | string
     */
    public $sort;

    /*
     * 必传 | string
     */
    public $sort_way;
}