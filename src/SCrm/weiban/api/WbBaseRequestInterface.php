<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api;

interface WbBaseRequestInterface
{
    public function setParam($param);

    public function getParam();

    public function getMethod(): string;

    public function getUrlPath(): string;

    public function execute();
}
