<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\department\get_list\param;

class DepartmentListParam
{
    // 部门id。获取指定部门及其下的子部门（以及子部门的子部门等等，递归）。 如果不填，默认获取全量组织架构
    public $id;
}