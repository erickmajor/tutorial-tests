<?php

declare(strict_types=1);

namespace ApplicationPHPUnit\Chapter2;

use PHPUnit\Framework\TestCase;

class Test11ExceptionTest extends TestCase
{
    public function testException()
    {
        $this->setExpectedException('InvalidArgumentException');
    }

    public function testExceptionHasRightMessage()
    {
        $this->setExpectedException(
          'InvalidArgumentException', 'Right Message'
        );
        throw new InvalidArgumentException('Some Message', 10);
    }

    public function testExceptionMessageMatchesRegExp()
    {
        $this->setExpectedExceptionRegExp(
          'InvalidArgumentException', '/Right.*/', 10
        );
        throw new InvalidArgumentException('The Wrong Message', 10);
    }

    public function testExceptionHasRightCode()
    {
        $this->setExpectedException(
          'InvalidArgumentException', 'Right Message', 20
        );
        throw new InvalidArgumentException('The Right Message', 10);
    }
}
