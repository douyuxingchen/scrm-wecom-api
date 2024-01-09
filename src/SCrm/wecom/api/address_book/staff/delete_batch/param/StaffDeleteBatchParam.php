<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\staff\delete_batch\param;

class StaffDeleteBatchParam
{
    /*
     * 必传 | 数组 | 成员UserID列表。对应管理端的账号。最多支持200个。若存在无效UserID，直接返回错误
     */
    public $useridlist;
}
