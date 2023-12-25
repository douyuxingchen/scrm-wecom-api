<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\core\config;

use Exception;

class WbReqConfMain extends WbReqConfAbstract
{

    public function getCorpId()
    {
        return config('qy_weixin.weiban_passport.corpid');
    }

    public function getSecret()
    {
        return config('qy_weixin.weiban_passport.corpsecret');
    }

    public function getCacheKey(): string
    {
        return 'wei_ban_access_token_main';
    }
}