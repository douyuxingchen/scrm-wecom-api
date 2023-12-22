<?php

namespace Unit;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\department\detail\DepartmentDetailRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\department\detail\param\DepartmentDetailParam;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\staff\detail\param\StaffDetailParam;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\staff\detail\StaffDetailRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\customer_acquisition\customer_list\CustomerAcquisitionCustomerListRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\customer_acquisition\customer_list\param\CustomerAcquisitionCustomerListParam;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\customer_tag\listing\CustomerCorpTagListRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\customer_tag\listing\param\CustomerCorpTagListParam;
use Exception;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config\ReqConfCustomize;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\GlobalConfig;
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

    public function testAll123()
    {
        $this->testDebug();
        $this->testGetTagList();
        $this->testGetStaffDetail();
        $this->testCustomerAcquisition();

        $this->assertEquals(1, 1);
    }

    public function testDebug()
    {
        try {
            GlobalConfig::getInstance()->setDebug();

            $corpId     = lib_env('CORPID');
            $corpSecret = lib_env('CORPSECRET');
            $cacheKey   = $this->getCustomizeCacheKey($corpSecret);

            $config  = new ReqConfCustomize($corpId, $corpSecret, $cacheKey);
            $param   = new DepartmentDetailParam();
            $request = new DepartmentDetailRequest();
            $request->setParam($param);
            $request->setConfig($config);
            $param->id = 91;

            $res = $request->execute();

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function testGetTagList()
    {
        try {
            GlobalConfig::getInstance()->setDebug();

            $corpId     = lib_env('CORPID');
            $corpSecret = lib_env('CORPSECRET');
            $cacheKey   = $this->getCustomizeCacheKey($corpSecret);

            $config  = new ReqConfCustomize($corpId, $corpSecret, $cacheKey);
            $param   = new CustomerCorpTagListParam();
            $request = new CustomerCorpTagListRequest();
            $request->setParam($param);
            $request->setConfig($config);
            $param->tag_id = 'etr2IaCgAAStCgcpA_fM1Lg-Nsw5zN2A';

            $res = $request->execute();

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function testGetStaffDetail()
    {
        try {
            GlobalConfig::getInstance()->setDebug();

            $corpId     = lib_env('CORPID');
            $corpSecret = lib_env('CORPSECRET_MANAGE_BACKEND');
            $cacheKey   = $this->getCustomizeCacheKey($corpSecret);

            $config  = new ReqConfCustomize($corpId, $corpSecret, $cacheKey);
            $param   = new StaffDetailParam();
            $request = new StaffDetailRequest();
            $request->setParam($param);
            $request->setConfig($config);
            $param->userid = 'FengHaiNing';

            $res = $request->execute();

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function testCustomerAcquisition()
    {
        try {
            GlobalConfig::getInstance()->setDebug();

            $corpId     = lib_env('CORPID');
            $corpSecret = lib_env('CORPSECRET_AGENT');
            $cacheKey   = $this->getCustomizeCacheKey($corpSecret);

            $param = new CustomerAcquisitionCustomerListParam();

            $config  = new ReqConfCustomize($corpId, $corpSecret, $cacheKey);
            $request = new CustomerAcquisitionCustomerListRequest();
            $request->setConfig($config);
            $request->setParam($param);
            $param->link_id = 'cawcde0f5d477cdf06';

            $res = $request->execute();
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    private function getCustomizeCacheKey($corpSecret): string
    {
        return 'we_com_access_token_customize_' . md5($corpSecret);
    }
}