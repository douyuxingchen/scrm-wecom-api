<?php

namespace Douyuxingchen\ScrmWecomApi\Redis;

use Exception;
use Illuminate\Redis\Connections\Connection;
use Illuminate\Redis\RedisManager;

class RedisClient
{
    private $config;

    public function __construct($host = '', $part = 0, $password = '', $database = '')
    {
        $this->initConfig($host, $part, $password, $database);
    }

    /**
     * @desc 初始化redis配置
     * User: fenghaining@douyuxingchen.com
     * Date: 2023/12/15 17:46
     * @param string $host
     * @param int $part
     * @param string $password
     * @param string $database
     * @throws Exception
     */
    private function initConfig(string $host = '', int $part = 0, string $password = '', string $database = '')
    {
        if (!$host) {
            $host = lib_env('REDIS_HOST');
        }
        if (!$part) {
            $part = lib_env('REDIS_PORT');
        }
        if (!$password) {
            $password = lib_env('REDIS_PASSWORD');
        }
        if (!$database) {
            $database = lib_env('REDIS_DB');
        }
        $this->config = [
            'client'  => 'predis',
            'default' => [
                'host'     => $host,
                'port'     => $part,
                'password' => $password,
                'database' => $database,
            ]
        ];
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
}