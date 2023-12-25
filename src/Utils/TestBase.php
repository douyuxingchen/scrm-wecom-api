<?php

namespace Douyuxingchen\ScrmWecomApi\Utils;

use PHPUnit\Framework\TestCase;

class TestBase extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        SignUtil::setDebug();
    }
}