<?php

namespace Unit;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\chat\list_byCustomer\param\WbChatGroupListByCustomerParam;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\chat\list_byCustomer\WbChatGroupListByCustomerRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\contact_way\listing\param\WbContactWayListParam;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\contact_way\listing\WbContactWayListRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\detail\param\WbCustomerDetailParam;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\detail\WbCustomerDetailRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\unionid_to_externalUserId\param\WbUnionidToExternalUserIdParam;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\unionid_to_externalUserId\WbUnionidToExternalUserIdRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\staff\detail\param\WbStaffDetailParam;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\staff\detail\WbStaffDetailRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\staff\listing\param\WbStaffListParam;
use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\staff\listing\WbStaffListRequest;
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

            $customerChatListParams   = new WbChatGroupListByCustomerParam();
            $customerChatListRequest = new WbChatGroupListByCustomerRequest();
            $customerChatListRequest->setConfig($mainConf);
            $customerChatListRequest->setParam($customerChatListParams);
            $customerChatListParams->unionid = 'oS_645_SRnxU4aeME3eaAXFo2qsI';
            $customerChatListParams->openid = 'oaqKd6TnvHd7cJuOuKA9TIteAqVQ';
            $customerChatListRes            = $customerChatListRequest->execute();

            $euidToUnionidParam   = new WbUnionidToExternalUserIdParam();
            $euidToUnionidRequest = new WbUnionidToExternalUserIdRequest();
            $euidToUnionidRequest->setConfig($mainConf);
            $euidToUnionidRequest->setParam($euidToUnionidParam);
            $euidToUnionidParam->unionid = 'oS_645y7_7wLCGbYoHoQDaiAdxew';
            $euidToUnionidParam->openid  = 'ocuzb6j536KAeejNT-FGJ23gnvqI1111';
            $euidToUnionidRes            = $euidToUnionidRequest->execute();

            /****************客户详情 start*****************/
            $wbCustomerDetailParam   = new WbCustomerDetailParam();
            $wbCustomerDetailRequest = new WbCustomerDetailRequest();
            $wbCustomerDetailRequest->setParam($wbCustomerDetailParam);
            $wbCustomerDetailRequest->setConfig($mainConf);
            $wbCustomerDetailParam->id = 'wmgizUDQAAb7bAoA10kTp97YSxWVVHcw';

            $wbCustomerDetailRes = $wbCustomerDetailRequest->execute();
            /****************客户详情 end*****************/

            /****************微伴员工列表 start*****************/
            $wbStaffListParam   = new WbStaffListParam();
            $wbStaffListRequest = new WbStaffListRequest();
            $wbStaffListRequest->setParam($wbStaffListParam);
            $wbStaffListRequest->setConfig($mainConf);

            $wbStaffDetailRes = $wbStaffListRequest->execute();
            /****************微伴员工列表 end*****************/

            /****************微伴员工详情 start*****************/
            $wbStaffDetailParam   = new WbStaffDetailParam();
            $wbStaffDetailRequest = new WbStaffDetailRequest();
            $wbStaffDetailRequest->setParam($wbStaffDetailParam);
            $wbStaffDetailRequest->setConfig($mainConf);
            $wbStaffDetailParam->staff_id = 'wogizUDQAAt1f8wupfTlFniOOjtNuyEQ';

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