<?php

namespace Douyuxingchen\ScrmWecomApi\Utils;

class SignUtil
{
    /**
     * @desc 序列化参数，入参必须为关联数组
     * Date: 2023/12/23 19:26
     * @param $param
     * @return false|string
     */
    public static function marshal($param)
    {
        if ($param == null) {
            return '{}';
        }
        $arr = self::objToArray($param);
        // 对关联数组中的kv，执行排序，需要递归
        self::recKSort($arr);
        // 重新序列化，确保所有key按字典序排序
        return json_encode($arr, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * @desc 对象转数组
     * Date: 2023/12/23 19:26
     * @param $obj
     * @return mixed
     */
    public static function objToArray($obj)
    {
        //先转成json string
        $jsonStr = json_encode($obj);
        //再转成array
        return json_decode($jsonStr, true);
    }

    /**
     * @desc 关联数组排序，递归
     * Date: 2023/12/23 19:26
     * @param $arr
     */
    private static function recKSort(&$arr)
    {
        $kString = true;
        foreach ($arr as $k => &$v) {
            if (!is_string($k)) {
                $kString = false;
            }
            if (is_array($v)) {
                self::recKSort($v);
            }
        }
        if ($kString) {
            ksort($arr);
        }
    }
}
