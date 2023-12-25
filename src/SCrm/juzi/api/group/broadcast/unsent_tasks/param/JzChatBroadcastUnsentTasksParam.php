<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\group\broadcast\unsent_tasks\param;

class JzChatBroadcastUnsentTasksParam
{
    /*
     * 必传 | string | 页数从1开始
     */
    public $current;

    /*
     * 必传 | string | 每页个数，最大不超过500
     */
    public $pageSize;

}
