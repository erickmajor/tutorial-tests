<?php

declare(strict_types=1);

namespace ApplicationPHPUnit\Chapter2;

use PHPUnit\Framework\TestCase;

class Test10ExceptionTest extends TestCase
{
    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Right Message
     */
    public function testExceptionHasRightMessage()
    {
        throw new InvalidArgumentException('Some Message', 10);
    }

    /**
     * @expectedException              InvalidArgumentException
     * @expectedExceptionMessageRegExp #Right.*#
     */
    public function testExceptionMessageMatchesRegExp()
    {
        throw new InvalidArgumentException('Some Message', 10);
    }

    /**
     * @expectedException     InvalidArgumentException
     * @expectedExceptionCode 20
     */
    public function testExceptionHasRightCode()
    {
        throw new InvalidArgumentException('Some Message', 10);
    }
}
