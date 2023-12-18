<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\core\config;

interface BaseReqConfInterface
{
    public function getCorpId();

    public function getCorpSecret();

    public function getCacheKey();
}