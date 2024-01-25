<?php

namespace Unit;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\staff\detail\param\StaffDetailParam;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\address_book\staff\detail\StaffDetailRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\chat_group\detail\ChatGroupDetailRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\chat_group\detail\param\ChatGroupDetailParam;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\customer\detail\CustomerDetailRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\customer\detail\param\CustomerDetailParam;
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

            /****************群详情start*****************/
            $chatDetailParam   = new ChatGroupDetailParam();
            $chatDetailRequest = new ChatGroupDetailRequest();
            $chatDetailRequest->setParam($chatDetailParam);
            $chatDetailRequest->setConfig($mainConfig);
            $chatDetailParam->chat_id = 'wrr2IaCgAAfm13_6di8RpdG5r8ytvlBQ';

            $chatDetail = $chatDetailRequest->execute();
            /****************群详情end*****************/

            /****************员工详情start*****************/
            $staffDetailParam   = new StaffDetailParam();
            $staffDetailRequest = new StaffDetailRequest();
            $staffDetailRequest->setParam($staffDetailParam);
            $staffDetailRequest->setConfig($backendConfig);
            $staffDetailParam->userid = 'ZhangZhiMin';

            $staffDetailRes = $staffDetailRequest->execute();
            /****************员工详情end*****************/

            /****************客户详情start*****************/
            $customerDetailParam   = new CustomerDetailParam();
            $customerDetailRequest = new CustomerDetailRequest();
            $customerDetailRequest->setParam($customerDetailParam);
            $customerDetailRequest->setConfig($mainConfig);
            $customerDetailParam->external_userid = 'wmr2IaCgAAhInq0jBDiF-iOszblt0DZw';

            $customerDetailRes = $customerDetailRequest->execute();
            dd($customerDetailRes);
            /****************员工详情end*****************/

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
        $corpId     = lib_env('CORPID');
        $mainSecret = lib_env('CORPSECRET');
        return new ReqConfCustomize($corpId, $mainSecret);
    }

    /**
     * @desc "SCRM通知"自建应用配置
     * Date: 2023/12/23 17:23
     * @return ReqConfAbstract
     * @throws Exception
     */
    private function getViceConf(): ReqConfAbstract
    {
        $corpId     = lib_env('CORPID');
        $viceSecret = lib_env('CORPSECRET_AGENT');
        return new ReqConfCustomize($corpId, $viceSecret);
    }

    /**
     * @desc 某应用配置
     * Date: 2023/12/23 17:24
     * @return ReqConfAbstract
     * @throws Exception
     */
    private function getBackendConf(): ReqConfAbstract
    {
        $corpId              = lib_env('CORPID');
        $manageBackendSecret = lib_env('CORPSECRET_MANAGE_BACKEND');
        return new ReqConfCustomize($corpId, $manageBackendSecret);
    }

}