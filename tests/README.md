# 单元测试说明

## 常用命令
```bash
# 企业微信API
./vendor/bin/phpunit --filter testMain ./tests/Unit/TestWeCom.php

# 微伴助手API
./vendor/bin/phpunit --filter testMain ./tests/Unit/TestWeiBan.php

# 句子秒回API
./vendor/bin/phpunit --filter testMain ./tests/Unit/TestJuZi.php
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