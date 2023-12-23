<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\config;

class JzReqConfMain extends JzReqConfAbstract
{

    public function getToken()
    {
        return config('qy_weixin.juzi_config.token');
    }
}