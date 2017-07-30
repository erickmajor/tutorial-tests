<?php

declare(strict_types=1);

namespace ApplicationPHPUnit\Chapter2;

use PHPUnit\Framework\TestCase;

class Test12ExceptionTest extends TestCase
{
    public function testException() {
        try {
            // ... Código que se espera que lance uma exceção ...
        }

        catch (InvalidArgumentException $expected) {
            return;
        }

        $this->fail('Uma exceção esperada não foi criada.');
    }
}
