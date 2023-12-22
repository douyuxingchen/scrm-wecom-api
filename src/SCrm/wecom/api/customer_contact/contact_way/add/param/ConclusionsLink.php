<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\contact_way\add\param;

class ConclusionsLink
{
    /*
     * link.title | 图文消息标题，最长为128字节
     */
    public $title;

    /*
     * link.picurl | 图文消息封面的url
     */
    public $picurl;

    /*
     * link.desc | 图文消息的描述，最长为512字节
     */
    public $desc;

    /*
     * link.url | 图文消息的链接
     */
    public $url;
}