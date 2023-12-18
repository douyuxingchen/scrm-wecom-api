<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config;

class ReqConfMain implements BaseReqConfInterface
{

    public function getCorpId()
    {
        return class_exists('config') ? config('qy_weixin.passport.corpid') : '';
    }

    public function getCorpSecret()
    {
        return class_exists('config') ? config('qy_weixin.passport.corpsecret') : '';
    }

    public function getCacheKey(): string
    {
        return 'we_com_access_token_main';
    }
}