<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\chat_list\param;

class WbCustomerChatListParam
{
    /*
     * 非必传 id和unionid必传一个 | string | 客户id，对应企业微信客户id
     */
    public $id;

    /*
     * 非必传 id和unionid必传一个 | string | 客户unionid
     */
    public $unionid;

    /*
     * 非必传 密文企业选择unionid时必传 | string | 客户openid
     */
    public $openid;

    /*
     * 非必传 | string | 列表返回长度。默认值为30，最大值为100
     */
    public $limit;

    /*
     * 非必传 | string | 列表偏移。用于迭代获取所有数据，默认值为0
     */
    public $offset;

}