<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer\get_detail\param;

class ExternalContactGetDetailParam
{
    // 外部联系人的userid，注意不是企业成员的账号
    public $external_userid;

    // 上次请求返回的next_cursor
    public $cursor;
}
