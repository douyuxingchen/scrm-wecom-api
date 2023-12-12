<?php
declare(strict_types=1);
namespace Tests;
use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    // ./vendor/bin/phpunit --filter testTure ./tests/FirstTest.php
    public function testTure()
    {
        $this->assertEquals(2, 1+1);
    }

}