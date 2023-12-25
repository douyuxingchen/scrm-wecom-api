<?php

namespace Unit;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\contact_way\listing\param\WbContactWayListParam;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\contact_way\listing\WbContactWayListRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\staff\detail\param\WbStaffDetailParam;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\staff\detail\WbStaffDetailRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\core\config\WbReqConfCustomize;
use Douyuxingchen\ScrmWecomApi\Utils\TestBase;
use Exception;

class TestWeiBan extends TestBase
{
    // ./vendor/bin/phpunit --filter testMain ./tests/Unit/TestWeiBan.php
    public function testMain()
    {
        try {
            $corpId    = lib_env('WEI_BAN_CORP_ID');
            $mainToken = lib_env('WEI_BAN_SECRET');
            $mainConf  = new WbReqConfCustomize($corpId, $mainToken);

            /****************微伴员工详情 start*****************/
            $wbStaffDetailParam   = new WbStaffDetailParam();
            $wbStaffDetailRequest = new WbStaffDetailRequest();
            $wbStaffDetailRequest->setParam($wbStaffDetailParam);
            $wbStaffDetailRequest->setConfig($mainConf);
            $wbStaffDetailParam->staff_id = 'wogizUDQAAgiSXoHZ6lKwCZ_12r6YUMA';

            $wbStaffDetailRes = $wbStaffDetailRequest->execute();
            /****************微伴员工详情 end*****************/

            /****************客户群列表start*****************/
            $wbContactWayListParam = new WbContactWayListParam();
            $wbContactWayListReq   = new WbContactWayListRequest();
            $wbContactWayListReq->setParam($wbContactWayListParam);
            $wbContactWayListReq->setConfig($mainConf);
            $wbContactWayListParam->limit = 2;

            $wbContactWayListRes = $wbContactWayListReq->execute();
            /****************句子客户列表end*****************/

        } catch (Exception $e) {
            dd([
                'code' => $e->getCode(),
                'msg'  => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);
        }

        $this->assertEquals(1, 1);
    }
}