<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\core\config;

class JzReqConfGroup extends JzReqConfAbstract
{
    public function getToken()
    {
        return config('qy_weixin.juzi_config.group_token');
    }
}