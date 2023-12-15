<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config;

interface ReqConfInterface
{
    public function getCorpId();

    public function getCorpSecret();

    public function getCacheKey();
}