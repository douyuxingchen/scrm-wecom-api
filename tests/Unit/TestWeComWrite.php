<?php

namespace Unit;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\customer_acquisition\create\CustomerAcquisitionCreateRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\customer_acquisition\create\param\CustomerAcquisitionCreateParam;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\msg_push\send_welcomeMsg\param\SendWelcomeMsgParam;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\msg_push\send_welcomeMsg\SendWelcomeMsgRequest;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config\ReqConfAbstract;
use Douyuxingchen\ScrmWecomApi\Utils\TestBase;
use Exception;
use Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config\ReqConfCustomize;

class TestWeComWrite extends TestBase
{
    // ./vendor/bin/phpunit --filter testWriteMain ./tests/Unit/TestWeComWrite.php
    public function testWriteMain()
    {
        try {
            $mainConfig    = $this->getMainConf();
            $viceConfig    = $this->getViceConf();
            $backendConfig = $this->getBackendConf();

            /****************发送欢迎语 start*****************/
            $sendWelcomeMsgParam   = new SendWelcomeMsgParam();
            $sendWelcomeMsgRequest = new SendWelcomeMsgRequest();
            $sendWelcomeMsgRequest->setParam($sendWelcomeMsgParam);
            $sendWelcomeMsgRequest->setConfig($mainConfig);
            $sendWelcomeMsgParam->welcome_code = 'oZeMmN1AOEEyJCOyV6bz6JchxteYuyZLFwL5zdJzUGE';
            $sendWelcomeMsgParam->text         = [
                'content' => '发送一条测试消息',
            ];
            $sendWelcomeMsgParam->attachments  = [
                [
                    'msgtype' => 'link',
                    'link'    => [
                        'title'  => '测试图文消息标题',
                        'desc'   => '我是一条测试图文消息',
                        'url'    => 'https://www.baidu.com',
                        'picurl' => 'https://static.douyuxingchen.com/images/D1F5D1BFCFFBA70A20E26EB15FF81D19.jpg',
                    ],
                ],
            ];
            //$sendRes = $sendWelcomeMsgRequest->execute();
            //dd($sendRes);
            /****************发送欢迎语 end*****************/

            /****************生成获客链接 start*****************/
            $caCreateParam   = new CustomerAcquisitionCreateParam();
            $caCreateRequest = new CustomerAcquisitionCreateRequest();
            $caCreateRequest->setParam($caCreateParam);
            $caCreateRequest->setConfig($viceConfig);
            $caCreateParam->link_name = '希沃投流-L系列-冯海宁';
            $caCreateParam->range         = [
                'user_list' => ['FengHaiNing'],
            ];
            //$caCreatedRes = $caCreateRequest->execute();
            //dd($caCreatedRes);
            /****************生成获客链接 end*****************/
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