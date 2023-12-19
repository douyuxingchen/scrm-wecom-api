<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config;

use Exception;

class ReqConfMain extends ReqConfAbstract
{

    public function getCorpId()
    {
        return config('qy_weixin.passport.corpid');
    }

    public function getCorpSecret()
    {
        return config('qy_weixin.passport.corpsecret');
    }

    public function getCacheKey(): string
    {
        return 'we_com_access_token_main';
    }
}