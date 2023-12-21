<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\external_contact\batch_get_by_user;

use Douyuxingchen\ScrmWecomApi\SCrm\wecom\api\BaseRequestAbstract;

class ExternalContactBatchGetByUserRequest extends BaseRequestAbstract
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUrlPath(): string
    {
        return '/cgi-bin/externalcontact/batch/get_by_user';
    }
}
