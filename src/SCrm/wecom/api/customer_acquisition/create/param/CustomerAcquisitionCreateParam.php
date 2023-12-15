<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_acquisition\create\param;

class CustomerAcquisitionCreateParam
{
    // 必传 | 链接名称
    public $link_name;

    // 非必传 | .user_list 此获客链接关联的userid列表，最多500人； .department_list 此获客链接关联的部门id列表，部门覆盖总人数最多500个
    public $range;

    // 非必传 | 是否无需验证，默认为true
    public $skip_verify;
}
