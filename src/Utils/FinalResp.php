<?php

namespace Douyuxingchen\ScrmWecomApi\Utils;

class FinalResp
{
    private $code;
    private $succode;
    private $message;
    private $data;

    private static $instance = null;

    public static function getInstance(): FinalResp
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

    /**
     * @desc 返回是否成功
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->code == $this->succode;
    }

    /**
     * @desc 设置返回的状态码
     * @param int $code 返回的状态码
     * @param int $succode 成功的状态码
     * @return $this
     */
    public function setCode(int $code, int $succode = 0): FinalResp
    {
        $this->code    = $code;
        $this->succode = $succode;
        return $this;
    }

    /**
     * @desc 设置返回的错误信息
     * @param string $message
     * @return $this
     */
    public function setMessage(string $message): FinalResp
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @desc 设置返回数据
     * @param array|null $data
     * @return $this
     */
    public function setData(?array $data = []): FinalResp
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @desc 获取状态码
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @desc 获取返回的错误信息
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @desc 获取返回的数据
     * @param string $key
     * @return array|mixed
     */
    public function getData(string $key = '')
    {
        if ($key) {
            return $this->data[$key] ?? [];
        } else {
            return $this->data;
        }
    }

    /**
     * @desc 转换数组
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }

    /**
     * @desc 转换JSON
     * @return string
     */
    public function toJson(): string
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
}
