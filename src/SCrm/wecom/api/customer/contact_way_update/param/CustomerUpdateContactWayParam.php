<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_chat_group\contact_way_update\param;

class CustomerUpdateContactWayParam
{
    /*
     * 必传 | 企业联系方式的配置id
     */
    public $config_id;

    /*
     * 非必传 | 在小程序中联系时使用的控件样式
     */
    public $style;

    /*
     * 非必传 | 联系方式的备注信息，用于助记，不超过30个字符
     */
    public $remark;

    /*
     * 非必传 | 外部客户添加时是否无需验证，默认为true
     */
    public $skip_verify;

    /*
     * 非必传 | 企业自定义的state参数，用于区分不同的添加渠道，在调用“获取外部联系人详情”时会返回该参数值，不超过30个字符
     */
    public $state;

    /*
     * 非必传 | 数组 | 使用该联系方式的用户userID列表，在type为1时为必填，且只能有一个
     */
    public $user;

    /*
     * 非必传 | 数组 | 使用该联系方式的部门id列表，只在type为2时有效
     */
    public $party;

    /*
     * 非必传 | 临时会话二维码有效期，以秒为单位。该参数仅在is_temp为true时有效，默认7天，最多为14天
     */
    public $expires_in;

    /*
     * 非必传 | 临时会话有效期，以秒为单位。该参数仅在is_temp为true时有效，默认为添加好友后24小时，最多为14天
     */
    public $chat_expires_in;

    /*
     * 非必传 | 可进行临时会话的客户unionid，该参数仅在is_temp为true时有效，如不指定则不进行限制
     */
    public $unionid;

    /*
     * 非必传 | 结束语，会话结束时自动发送给客户，可参考“结束语定义”，仅在is_temp为true时有效 | 祥见-Conclusions文件
     */
    public $conclusions;
}
