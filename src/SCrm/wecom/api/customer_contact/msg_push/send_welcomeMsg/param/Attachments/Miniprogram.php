<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\msg_push\send_welcomeMsg\param\Attachments;

class Miniprogram
{

    /*
     * 必传 | 小程序消息标题，最长为64字节
     */
    public $title;

    /*
     * 必传 | 小程序消息封面的mediaid，封面图建议尺寸为520*416
     */
    public $pic_media_id;

    /*
     * 必传 | 小程序appid，必须是关联到企业的小程序应用
     */
    public $appid;

    /*
     * 必传 | 小程序page路径
     */
    public $page;
}