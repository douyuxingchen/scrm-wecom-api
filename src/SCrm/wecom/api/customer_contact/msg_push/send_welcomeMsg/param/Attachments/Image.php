<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\customer_contact\msg_push\send_welcomeMsg\param\Attachments;

class Image
{
    /*
     * 非必传 | 图片的media_id，可以通过素材管理接口获得
     */
    public $media_id;

    /*
     * 非必传 | 图片的链接，仅可使用上传图片接口得到的链接
     */
    public $pic_url;
}