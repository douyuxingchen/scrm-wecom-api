<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\core\config;

use Exception;

abstract class WbReqConfAbstract
{
    abstract function getCorpId();

    abstract function getSecret();

    abstract function getCacheKey();
}