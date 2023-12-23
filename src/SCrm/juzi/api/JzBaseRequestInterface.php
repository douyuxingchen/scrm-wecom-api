<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\juzi\api;

interface JzBaseRequestInterface
{
    public function setParam($param);

    public function getParam();

    public function setConfig($config);

    public function getConfig();

    public function getMethod(): string;

    public function getUrlPath(): string;

    public function execute();
}
