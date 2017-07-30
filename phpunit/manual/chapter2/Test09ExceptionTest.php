<?php

declare(strict_types=1);

namespace ApplicationPHPUnit\Chapter2;

use PHPUnit\Framework\TestCase;

class Test09ExceptionTest extends TestCase
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
    }
}
