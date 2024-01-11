<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\customerExist\param;

class WbChatGroupCustomerExistParam
{
    /*
     * 必传 | string | 企业群聊id
     */
    public $group_chat_id;

    /*
     * 非必传(external_user_id和external_user_unionid必传一个) | string | 客户id
     */
    public $external_user_id;

    /*
     * 非必传(external_user_id和external_user_unionid必传一个) | string | 客户unionid
     */
    public $external_user_unionid;

    /*
     * 非必传(密文企业选择external_user_unionid时必传) | string | 客户openid
     */
    public $external_user_openid;

}