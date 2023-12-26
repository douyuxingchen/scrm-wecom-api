<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\detail\param;

/*
 * TIPS:只有在企业微信侧完成了微信开发者ID绑定后才可在企业微信用户系统和微伴助手用户系统中通过 unionid 关联到具体客户。绑定方法见 企业微信unionid绑定流程
 */

class WbCustomerDetailParam
{
    /*
     * 非必传 id和unionid必传一个 | string | 对应企业微信客户id
     */
    public $id;

    /*
     * 非必传 id和unionid必传一个 | string | 客户unionid
     */
    public $unionid;

    /*
     * 非必传 密文企业选择unionid时需填写 | string | 客户openid
     */
    public $openid;

}