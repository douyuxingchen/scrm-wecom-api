# 单元测试说明

## 常用命令
```bash
# 测试指定文件
./vendor/bin/phpunit --filter testMain ./tests/Unit/TestWeiBan.php
```

## 如何读取环境变量
```php
# 读取PHP容器内配置的环境变量
getenv('APP_ENV');

# 读取Laravel框架载入的环境变量
env('APP_ENV');

# 读取类库配置的环境变量
lib_env('APP_ENV');
```