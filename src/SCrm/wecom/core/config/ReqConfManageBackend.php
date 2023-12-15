<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config;

class ReqConfManageBackend implements ReqConfInterface
{
    public function getCorpId()
    {
        return lib_env('CORPID') ?? config('qy_weixin.passport.corpid');
    }

    public function getCorpSecret()
    {
        return lib_env('CORPSECRET_MANAGE_BACKEND') ?? config('qy_weixin.passport.manage_backend_secret');
    }

    public function getCacheKey(): string
    {
        return 'we_com_access_token_manage_backend';
    }
}