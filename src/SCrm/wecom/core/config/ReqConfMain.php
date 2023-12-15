<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config;

class ReqConfMain implements ReqConfInterface
{

    public function getCorpId()
    {
        return lib_env('CORPID') ?? config('qy_weixin.passport.corpid');
    }

    public function getCorpSecret()
    {
        return lib_env('CORPSECRET') ?? config('qy_weixin.passport.corpsecret');
    }

    public function getCacheKey(): string
    {
        return 'we_com_access_token_main';
    }
}