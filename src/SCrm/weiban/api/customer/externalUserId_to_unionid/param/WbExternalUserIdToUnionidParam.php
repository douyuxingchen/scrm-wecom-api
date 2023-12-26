<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\externalUserId_to_unionid\param;

class WbExternalUserIdToUnionidParam
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