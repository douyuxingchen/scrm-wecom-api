<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config;

use Exception;

abstract class ReqConfAbstract
{
    abstract function getCorpId();

    abstract function getCorpSecret();

    abstract function getCacheKey();
}