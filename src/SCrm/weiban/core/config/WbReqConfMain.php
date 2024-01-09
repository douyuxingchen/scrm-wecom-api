<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\core\config;

use Exception;

class WbReqConfMain extends WbReqConfAbstract
{

    public function getCorpId()
    {
        return config('qy_weixin.weiban_passport.corp_id');
    }

    public function getSecret()
    {
        return config('qy_weixin.weiban_passport.secret');
    }

    public function getCacheKey(): string
    {
        return 'wei_ban_access_token_main';
    }
}