<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\customer_acquisition\create\param;

class Range
{
    // 非必传 | 数组 | 此获客链接关联的userid列表，最多500人
    public $user_list;

    // 非必传 | 数组 | 此获客链接关联的部门id列表，部门覆盖总人数最多500个
    public $department_list;
}