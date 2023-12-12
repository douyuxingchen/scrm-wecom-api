<?php
declare(strict_types=1);


define('TEST_ROOT', __DIR__);
define('STUBS_ROOT', __DIR__.'/fixtures');

$_SERVER['HTTP_HOST'] = 'localhost';

include __DIR__.'/../vendor/autoload.php';