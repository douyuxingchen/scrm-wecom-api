<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\config;

class JzReqConfCustomize extends JzReqConfAbstract
{
    private $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function getToken()
    {
        return $this->token;
    }
}