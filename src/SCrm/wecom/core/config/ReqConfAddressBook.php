<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config;


class ReqConfAddressBook implements BaseReqConfInterface
{
    public function getCorpId(): string
    {
        return config('qy_weixin.passport.corpid');
    }

    public function getCorpSecret(): string
    {
        return config('qy_weixin.passport.address_book_secret');
    }

    public function getCacheKey(): string
    {
        return 'we_com_access_token_address_book';
    }
}
