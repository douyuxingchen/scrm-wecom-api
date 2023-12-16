<?php

namespace Unit;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\corp_tag\get_list\CorpTagGetListRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\corp_tag\get_list\param\CorpTagGetListParam;
use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    // Demo
    // ./vendor/bin/phpunit --filter testSum ./tests/Unit/FirstTest.php
    public function testSum()
    {
        $sum = 1 + 1;
        $this->assertEquals(2, $sum);
    }

    public function testGetTagList()
    {

        $param   = new CorpTagGetListParam();
        $request = new CorpTagGetListRequest();
        $request->setParam($param);

        $param->tag_id = 'etr2IaCgAAStCgcpA_fM1Lg-Nsw5zN2A';

        $res = $request->execute();
        dd($res);
    }
}