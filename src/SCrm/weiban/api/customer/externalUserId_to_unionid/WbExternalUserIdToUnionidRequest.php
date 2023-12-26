<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\externalUserId_to_unionid;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbExternalUserIdToUnionidRequest extends WbBaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/open-api/external_user/eu_id2unionid';
    }
}
