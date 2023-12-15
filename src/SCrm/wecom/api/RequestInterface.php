<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\wecom\api;

interface RequestInterface
{
    public function setParam($param);

    public function getParam();

//    public function getMethod(): string;
//
//    public function getUrlPath(): string;

    public function execute();
}
