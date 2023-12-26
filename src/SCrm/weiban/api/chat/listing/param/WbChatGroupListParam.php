<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\chat\listing\param;

class WbChatGroupListParam
{
    /*
     * 非必传 | string | 企业微信员工id，实则微伴加密的员工ID
     */
    public $staff_id;

    /*
     * 非必传 | string | 列表返回长度。默认值为30，最大值为100
     */
    public $limit;

    /*
     * 非必传 | string | 列表偏移。用于迭代获取所有数据，默认值为0
     */
    public $offset;

}