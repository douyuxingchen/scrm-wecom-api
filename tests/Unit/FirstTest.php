<?php

namespace Unit;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\department\get_detail\AddressBookDeptGetDetailRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\department\get_detail\param\AddressBookDeptGetDetailParam;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\staff\get_detail\AddressBookStaffGetDetailRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\staff\get_detail\param\AddressBookStaffGetDetailParam;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\customer_acquisition\get_customer_list\CustomerAcquisitionGetCustomerListRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\customer_acquisition\get_customer_list\param\CustomerAcquisitionGetCustomerListParam;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\customer_tag\get_list\CorpTagGetListRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\customer_tag\get_list\param\CorpTagGetListParam;
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

    public function testDebug()
    {
        GlobalConfig::getInstance()->setDebug();

        $corpId     = lib_env('CORPID');
        $corpSecret = lib_env('CORPSECRET');
        $cacheKey   = $this->getCustomizeCacheKey($corpSecret);

        $config  = new ReqConfCustomize($corpId, $corpSecret, $cacheKey);
        $param   = new AddressBookDeptGetDetailParam();
        $request = new AddressBookDeptGetDetailRequest();
        $request->setParam($param);
        $request->setConfig($config);
        $param->id = 91;

        $res = $request->execute();
        dd($res);
    }

    public function testGetTagList()
    {
        GlobalConfig::getInstance()->setDebug();

        $corpId     = lib_env('CORPID');
        $corpSecret = lib_env('CORPSECRET');
        $cacheKey   = $this->getCustomizeCacheKey($corpSecret);

        $config  = new ReqConfCustomize($corpId, $corpSecret, $cacheKey);
        $param   = new CorpTagGetListParam();
        $request = new CorpTagGetListRequest();
        $request->setParam($param);
        $request->setConfig($config);
        $param->tag_id = 'etr2IaCgAAStCgcpA_fM1Lg-Nsw5zN2A';

        $res = $request->execute();
        dd($res);
    }

    public function testGetStaffDetail()
    {
        GlobalConfig::getInstance()->setDebug();

        $corpId     = lib_env('CORPID');
        $corpSecret = lib_env('CORPSECRET_MANAGE_BACKEND');
        $cacheKey   = $this->getCustomizeCacheKey($corpSecret);

        $config  = new ReqConfCustomize($corpId, $corpSecret, $cacheKey);
        $param   = new AddressBookStaffGetDetailParam();
        $request = new AddressBookStaffGetDetailRequest();
        $request->setParam($param);
        $request->setConfig($config);
        $param->userid = 'FengHaiNing';

        $res = $request->execute();
        dd($res);
    }

    public function testCustomerAcquisition()
    {
        GlobalConfig::getInstance()->setDebug();

        $corpId     = lib_env('CORPID');
        $corpSecret = lib_env('CORPSECRET_AGENT');
        $cacheKey   = $this->getCustomizeCacheKey($corpSecret);

        $param = new CustomerAcquisitionGetCustomerListParam();

        $config  = new ReqConfCustomize($corpId, $corpSecret, $cacheKey);
        $request = new CustomerAcquisitionGetCustomerListRequest();
        $request->setConfig($config);
        $request->setParam($param);
        $param->link_id = 'cawcde0f5d477cdf06';
        $res            = $request->execute();
        dd($res);
    }

    private function getCustomizeCacheKey($corpSecret): string
    {
        return 'we_com_access_token_customize_' . md5($corpSecret);
    }
}