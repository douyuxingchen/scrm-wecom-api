<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\externalcontact\contact_way\update\param;

class Conclusions
{
    /**
     * text、image、link和miniprogram四者不能同时为空；
     * text与另外三者可以同时发送，此时将会以两条消息的形式触达客户;
     * image、link和miniprogram只能有一个，如果三者同时填，则按image、link、miniprogram的优先顺序取参，也就是说，如果image与link同时传值，则只有image生效;
     * media_id可以通过素材管理接口获得;
     * 构造结束语使用image消息时，只能填写meida_id字段,获取含有image结构的联系我方式时，返回p
     */

    /*
     * 文本消息，最长为4000字节 | 祥见-ConclusionsText文件
     */
    public $text;


    /*
     * 图片消息 | 祥见-ConclusionsImage文件
     */
    public $image;


    /*
     * 图文消息 | 祥见-ConclusionsLink文件
     */
    public $link;


    /*
     * 小程序消息 | 祥见-ConclusionsMiniprogram文件
     */
    public $miniprogram;
}