<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\chat_history\session\param;

class WbChatHistorySessionListParam
{
    /*
     * 必传 | string | 员工id
     */
    public $staff_id;

    /*
     * 非必传 | string | 列表排序方式。可选值为 'last_updated_desc' (默认，按照最近更新时间递减)和 'id_asc' (按照主键递增)
     */
    public $order_by;

    /*
     * 非必传 | string | 会话类型。若填写，只返回特定类型的会话。若不填写，只返回('ext_user', 'other_staff')类型的会话。可选值为 'ext_user'(外部联系人)，'room'(群聊)，'other_staff' (其他同事)
     */
    public $type;

    /*
     * 非必传 | string | 列表返回长度。默认值为30，最大值为100
     */
    public $limit;

    /*
     * 非必传 | string | 列表偏移。用于迭代获取所有数据，默认值为0
     */
    public $offset;

}