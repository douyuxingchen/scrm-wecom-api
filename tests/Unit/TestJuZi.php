<?php

namespace Unit;

use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\enterprise\chat\wecomChatId_to_wxid\JzWecomChatIdToWxIdRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\enterprise\chat\wecomChatId_to_wxid\param\JzWecomChatIdToWxIdParam;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\enterprise\customer\listing\JzCustomerListRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\enterprise\customer\listing\param\JzCustomerListParam;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\group\base\chat_list_member\JzChatListMemberRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\api\group\base\chat_list_member\param\JzChatListMemberParam;
use Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\config\JzReqConfCustomize;
use Douyuxingchen\ScrmWecomApi\Utils\TestBase;
use Exception;

class TestJuZi extends TestBase
{
    // ./vendor/bin/phpunit --filter testMain ./tests/Unit/TestJuZi.php
    public function testMain()
    {
        try {
            $mainToken  = lib_env('JU_ZI_TOKEN');
            $groupToken = lib_env('JU_ZI_GROUP_TOKEN');
            $mainConf   = new JzReqConfCustomize($mainToken);
            $groupConf  = new JzReqConfCustomize($groupToken);

            /****************句子客户列表start*****************/
            $jzCustomerListParam   = new JzCustomerListParam();
            $jzCustomerListRequest = new JzCustomerListRequest();
            $jzCustomerListRequest->setParam($jzCustomerListParam);
            $jzCustomerListRequest->setConfig($mainConf);
            $jzCustomerListParam->current  = 1;
            $jzCustomerListParam->pageSize = 10;

            $jzCustomerListRes = $jzCustomerListRequest->execute();
            /****************句子客户列表end*****************/

            /****************客户群列表start*****************/
            $jzChatListMemParam = new JzChatListMemberParam();
            $jzChatListMemReq   = new JzChatListMemberRequest();
            $jzChatListMemReq->setParam($jzChatListMemParam);
            $jzChatListMemReq->setConfig($groupConf);
            $jzChatListMemParam->current  = 1;
            $jzChatListMemParam->pageSize = 1;

            $jzChatListMemRes = $jzChatListMemReq->execute();
            /****************句子客户列表end*****************/

            /****************企微群ID转句子群ID start*****************/
            $jzWecomChatIdToWxIdParam = new JzWecomChatIdToWxIdParam();
            $jzWecomChatIdToWxIdReq   = new JzWecomChatIdToWxIdRequest();
            $jzWecomChatIdToWxIdReq->setParam($jzWecomChatIdToWxIdParam);
            $jzWecomChatIdToWxIdReq->setConfig($mainConf);
            $jzWecomChatIdToWxIdParam->wecomChatId = 'wrr2IaCgAA1IcYRbP6IlAcJcXjoAh92g';

            $jzWecomChatIdToWxIdRes = $jzWecomChatIdToWxIdReq->execute();
            dd($jzWecomChatIdToWxIdRes);
            /****************企微群ID转句子群ID end*****************/

        } catch (Exception $e) {
            dd($e->getMessage());
        }

        $this->assertEquals(1, 1);
    }
}