<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\group\base\chat_list_member\param;

class JzChatListMemberParam
{
    /*
     * 必传 | string | 当前页数
     */
    public $current;

    /*
     * 必传 | string | 每页数据条数，TIP：该API支持批量拉取群信息，最大pageSize为100
     */
    public $pageSize;
}
