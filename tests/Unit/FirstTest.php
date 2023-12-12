<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    // Demo
    // ./vendor/bin/phpunit --filter testSum ./tests/Unit/FirstTest.php
    public function testSum()
    {
        $sum = 1+1;
        $this->assertEquals(2, $sum);
    }

}