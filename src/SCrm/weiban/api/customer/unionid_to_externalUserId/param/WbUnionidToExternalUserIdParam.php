<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\unionid_to_externalUserId\param;

class WbUnionidToExternalUserIdParam
{
    /*
     * 请求示例
     {
        "external_user_ids": [
            "string"
        ]
     }
     */

    /*
     * 必传 | array[string] | 客户external_user_id列表
     */
    public $external_user_ids;
}