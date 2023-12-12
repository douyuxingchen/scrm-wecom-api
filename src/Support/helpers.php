<?php

if (! function_exists('lib_env')) {
    /**
     * Gets library environment variable.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     * @throws Exception
     */
    function lib_env(string $key, $default = null)
    {
        $env = lib_get_env();
        return $env[$key] ?? $default;
    }
}

if (! function_exists('lib_get_env')) {
    /**
     * Gets library environment.
     *
     * @return array
     * @throws Exception
     */
    function lib_get_env(): array
    {
        // 获取当前文件所在的目录
        $rootDir = dirname(__FILE__);

        // 获取 .env 文件的路径
        $envFilePath = $rootDir . DIRECTORY_SEPARATOR . '../../' . '.env';

        // 检查 .env 文件是否存在
        if (!file_exists($envFilePath)) {
            echo $envFilePath.PHP_EOL;
            throw new Exception('.env 文件不存在');
        }

        // 读取 .env 文件内容
        $envContent = file_get_contents($envFilePath);

        // 将 .env 内容转换成数组
        $envArray = [];
        $lines = explode("\n", $envContent);
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line !== '' && strpos($line, '=') !== false) {
                list($key, $value) = explode('=', $line, 2);
                $envArray[$key] = $value;
            }
        }

        return $envArray;
    }
}