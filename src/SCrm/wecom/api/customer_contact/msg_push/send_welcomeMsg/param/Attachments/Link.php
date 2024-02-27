<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\msg_push\send_welcomeMsg\param\Attachments;

class Link
{
    /*
     * 必传 | 图文消息标题，最长为128字节
     */
    public $title;

    /*
     * 非必传 | 图文消息封面的url
     */
    public $picurl;

    /*
     * 非必传 | 图文消息的描述，最长为512字节
     */
    public $desc;

    /*
     * 必传 | 图文消息的链接
     */
    public $url;

}