<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\customer\unionid_to_externalUserId;

use Douyuxingchen\ScrmWecomApi\SCrm\weiban\api\WbBaseRequestAbstract;

class WbUnionidToExternalUserIdRequest extends WbBaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUrlPath(): string
    {
        return '/open-api/external_user/unionid_to_external_userid';
    }
}
