<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\msg_push\send_welcomeMsg\param;

class Attachments
{
    /*
     * 必传 | 附件类型，可选image、link、miniprogram或者video
     */
    public $msgtype;

    /*
    * 非必传 | 图片消息 | 详见Attachments.Image文件说明
    */
    public $image;

    /*
     * 非必传 | 图文消息 | 详见Attachments.Link文件说明
     */
    public $link;

    /*
     * 非必传 | 小程序消息 | 详见Attachments.MiniProgram文件说明
     */
    public $miniprogram;

    /*
     * 非必传 | 视频消息 | 详见Attachments.MiniProgram文件说明
     */
    public $video;

    /*
     * 非必传 | 文件消息 | 详见Attachments.File文件说明
     */
    public $file;
}