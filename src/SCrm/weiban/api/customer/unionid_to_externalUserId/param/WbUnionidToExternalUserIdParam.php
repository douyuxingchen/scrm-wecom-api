<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\unionid_to_externalUserId\param;

class WbUnionidToExternalUserIdParam
{

    /*
     * 必传 | string | 微信授权unionid
     */
    public $unionid;

    /*
     * 必传 | string | 微信授权openid
     */
    public $openid;
}