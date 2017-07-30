<?php

declare(strict_types=1);

namespace ApplicationPHPUnit\Chapter2;

use PHPUnit\Framework\TestCase;

class Test03DependencyFailureTest extends TestCase
{
    public function testOne()
    {
        $this->assertTrue(FALSE);
    }

    /**
     * @depends testOne
     */
    public function testTwo()
    {
    }
}
