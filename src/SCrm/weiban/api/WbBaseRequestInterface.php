<?php

namespace Douyuxingchen\ScrmWecomApi\SCrm\weiban\api;

interface WbBaseRequestInterface
{
    public function setParam($param);

    public function getParam();

    public function setConfig($config);

    public function getConfig();

    public function getMethod(): string;

    public function getUrlPath(): string;

    public function isNeedToken(): bool;

    public function execute();
}
