<?php

namespace Douyuxingchen\ScrmWecomApi\Redis;

use Exception;
use Illuminate\Redis\Connections\Connection;
use Illuminate\Redis\RedisManager;

/**
 * Class RedisOp
 * Description: Redis
 * @uses \Redis
 * @method sMembers($key)
 * @method hGetAll($key)
 * @method sAdd($key, ...$value)
 * @method hSet($key, $hashKey, $value)
 * @method sRem($key, ...$member1)
 * @method hDel($key, $hashKey1, ...$otherHashKeys)
 * @method hmset($key, ...$dictionary)
 * @method hmget($key, ...$dictionary)
 * @method hget($key, $hashKey1)
 * Date: 2020/11/5 1:52 下午
 */
class RedisOp
{
    private $config;

    private static $defaultInstance;

    /**
     * @param $config
     * @throws Exception
     */
    private function __construct($config)
    {
        // 初始化redis配置
        $host     = $config['host'] ?? lib_env('REDIS_HOST');
        $port     = $config['port'] ?? lib_env('REDIS_PORT');
        $password = $config['password'] ?? lib_env('REDIS_PASSWORD');
        $database = $config['database'] ?? lib_env('REDIS_DB');

        $this->config = [
            'client'  => 'predis',
            'default' => [
                'host'     => $host,
                'port'     => $port,
                'password' => $password,
                'database' => $database,
            ]
        ];
    }

    /**
     * @param array $config
     * @return RedisOp
     * @throws Exception
     */
    public static function getInstance(array $config = []): RedisOp
    {
        if (!(self::$defaultInstance instanceof self)) {
            self::$defaultInstance = new self($config);
        }
        return self::$defaultInstance;
    }

    /**
     * @desc 返回redis连接对象
     * User: fenghaining@douyuxingchen.com
     * Date: 2023/12/15 17:44
     * @return Connection
     */
    public function getClient(): Connection
    {
        $redisManager = new RedisManager(app(), 'predis', $this->config);
        return $redisManager->resolve('default');
    }

    /**
     * @desc 获取字符串类型缓存
     * @param $key
     * @return mixed
     */
    public function getString($key)
    {
        return $this->getClient()->get($key);
    }

    /**
     * @desc 设置字符串缓存
     * @param  $key
     * @param  $value
     * @param int $expireTime
     * @return mixed
     */
    public function setString($key, $value, int $expireTime = 0)
    {
        if (0 == $expireTime) {
            return $this->getClient()->set($key, $value);
        } else {
            return $this->getClient()->setex($key, $expireTime, $value);
        }
    }

    /**
     * @desc 锁
     * @param $key
     * @param $value
     * @return mixed
     */
    public function setNx($key, $value)
    {
        return $this->getClient()->setnx($key, $value);
    }

    /**
     * @desc 获取过期时间
     * @param $key
     * @return mixed
     */
    public function ttl($key)
    {
        return $this->getClient()->ttl($key);
    }

    /**
     * @desc 设置数组缓存
     * @param $key
     * @param $value
     * @param int $expireTime
     * @return mixed
     */
    public function setArray($key, $value, int $expireTime = 0)
    {
        return $this->setString($key, json_encode($value, JSON_UNESCAPED_UNICODE), $expireTime);
    }

    /**
     * @desc 获取数组缓存
     * @param $key
     * @return false|mixed
     */
    public function getArray($key)
    {
        $cache = $this->getString($key);
        if ($cache === false) {
            return $cache;
        } else {
            return json_decode($cache, true);
        }
    }

    /**
     * @desc 删除缓存
     * @param $key
     * @return mixed
     */
    public function del($key)
    {
        return $this->getClient()->del($key);
    }

    /**
     * @desc 自增
     * @param $key
     * @return mixed
     */
    public function incr($key)
    {
        return $this->getClient()->incr($key);
    }

    /**
     * @desc 设置过期时间
     * @param $key
     * @param int $expireTime
     * @return mixed
     */
    public function expire($key, int $expireTime)
    {
        return $this->getClient()->expire($key, $expireTime);
    }

    private function __clone()
    {
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->getClient(), strtoupper($name)], $arguments);
    }

}