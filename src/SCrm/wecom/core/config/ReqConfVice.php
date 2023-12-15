<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config;

class ReqConfVice implements ReqConfInterface
{
    public function getCorpId(): string
    {
        return config('qy_weixin.passport.corpid');
    }

    public function getCorpSecret(): string
    {
        return config('qy_weixin.passport.agent_secret');
    }

    public function getCacheKey(): string
    {
        return 'we_com_access_token_vice';
    }
}
