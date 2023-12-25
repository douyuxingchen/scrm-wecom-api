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
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config\ReqConfAbstract;
use Douyuxingchen\ScrmWecomApi\Utils\TestBase;
use Exception;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config\ReqConfCustomize;

class TestWeCom extends TestBase
{
    // ./vendor/bin/phpunit --filter testMain ./tests/Unit/TestWeCom.php
    public function testMain()
    {
        try {
            $mainConfig    = $this->getMainConf();
            $viceConfig    = $this->getViceConf();
            $backendConfig = $this->getBackendConf();

            /****************部门详情start*****************/
            $deptDetailParam   = new DepartmentDetailParam();
            $deptDetailRequest = new DepartmentDetailRequest();
            $deptDetailRequest->setParam($deptDetailParam);
            $deptDetailRequest->setConfig($mainConfig);
            $deptDetailParam->id = 91;

            $deptDetailRes = $deptDetailRequest->execute();
            /****************部门详情start*****************/

            /****************标签列表start*****************/
            $corpTagListParam   = new CustomerCorpTagListParam();
            $corpTagListRequest = new CustomerCorpTagListRequest();
            $corpTagListRequest->setParam($corpTagListParam);
            $corpTagListRequest->setConfig($mainConfig);
            $corpTagListParam->tag_id = 'etr2IaCgAAStCgcpA_fM1Lg-Nsw5zN2A';

            $corpTagListRes = $corpTagListRequest->execute();
            /****************标签列表end*****************/
            /****************员工详情start*****************/
            $staffDetailParam   = new StaffDetailParam();
            $staffDetailRequest = new StaffDetailRequest();
            $staffDetailRequest->setParam($staffDetailParam);
            $staffDetailRequest->setConfig($backendConfig);
            $staffDetailParam->userid = 'FengHaiNing';

            $staffDetailRes = $staffDetailRequest->execute();
            /****************员工详情end*****************/
            /****************获客助手列表start*****************/
            $caCustomerListParam   = new CustomerAcquisitionCustomerListParam();
            $caCustomerListRequest = new CustomerAcquisitionCustomerListRequest();
            $caCustomerListRequest->setConfig($viceConfig);
            $caCustomerListRequest->setParam($caCustomerListParam);
            $caCustomerListParam->link_id = 'cawcde0f5d477cdf06';

            $caCustomerListRes = $caCustomerListRequest->execute();
            /****************获客助手列表end*****************/
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        $this->assertEquals(1, 1);
    }

    /**
     * @desc 主配置
     * Date: 2023/12/23 17:23
     * @return ReqConfAbstract
     * @throws Exception
     */
    private function getMainConf(): ReqConfAbstract
    {
        $corpId       = lib_env('CORPID');
        $mainSecret   = lib_env('CORPSECRET');
        $mainCacheKey = $this->getCustomizeCacheKey($mainSecret);
        return new ReqConfCustomize($corpId, $mainSecret, $mainCacheKey);
    }

    /**
     * @desc "SCRM通知"自建应用配置
     * Date: 2023/12/23 17:23
     * @return ReqConfAbstract
     * @throws Exception
     */
    private function getViceConf(): ReqConfAbstract
    {
        $corpId       = lib_env('CORPID');
        $viceSecret   = lib_env('CORPSECRET_AGENT');
        $viceCacheKey = $this->getCustomizeCacheKey($viceSecret);
        return new ReqConfCustomize($corpId, $viceSecret, $viceCacheKey);
    }

    /**
     * @desc 某应用配置
     * Date: 2023/12/23 17:24
     * @return ReqConfAbstract
     * @throws Exception
     */
    private function getBackendConf(): ReqConfAbstract
    {
        $corpId                = lib_env('CORPID');
        $manageBackendSecret   = lib_env('CORPSECRET_MANAGE_BACKEND');
        $manageBackendCacheKey = $this->getCustomizeCacheKey($manageBackendSecret);
        return new ReqConfCustomize($corpId, $manageBackendSecret, $manageBackendCacheKey);
    }

    private function getCustomizeCacheKey($corpSecret): string
    {
        return 'we_com_access_token_customize_' . md5($corpSecret);
    }
}