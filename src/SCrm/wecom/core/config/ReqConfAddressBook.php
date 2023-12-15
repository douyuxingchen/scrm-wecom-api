<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config;

class ReqConfAddressBook implements ReqConfInterface
{
    public function getCorpId(): string
    {
        return lib_env('CORPID') ?? config('qy_weixin.passport.corpid');
    }

    public function getCorpSecret(): string
    {
        return lib_env('CORPSECRET_ADDRESS_BOOK') ?? config('qy_weixin.passport.address_book_secret');
    }

    public function getCacheKey(): string
    {
        return 'we_com_access_token_address_book';
    }
}
