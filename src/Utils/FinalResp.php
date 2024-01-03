<?php

namespace Douyuxingchen\ScrmWecomApi\Utils;

class FinalResp
{

    private $code;
    private $successCode;
    private $message;
    private $data;

    private static $instance = null;

    public static function getInstance()
    {
        if (!self::$instance instanceof static) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public function isSuccess(): bool
    {
        return $this->code == $this->successCode;
    }

    public function setCode(int $code, int $successCode = 0): FinalResp
    {
        $this->code        = $code;
        $this->successCode = $successCode;
        return $this;
    }

    public function setMessage(string $message): FinalResp
    {
        $this->message = $message;
        return $this;
    }

    public function setData(?array $data = []): FinalResp
    {
        $this->data = $data;
        return $this;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function getData(): ?array
    {
        return $this->data;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }

    public function toJson(): string
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
}
