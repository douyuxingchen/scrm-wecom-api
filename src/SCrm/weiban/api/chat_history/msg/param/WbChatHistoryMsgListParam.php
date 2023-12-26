<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\chat_history\msg\param;

class WbChatHistoryMsgListParam
{
    /*
     * 必传 | string | 员工id
     */
    public $staff_id;

    /*
     * 必传 | string | 会话id
     */
    public $session_id;

    /*
     * 非必传 | integer | 返回值message_list中最后一个item的id
     */
    public $last_id;

    /*
     * 非必传 | integer | 列表返回长度，默认范围30-100
     */
    public $limit;

}