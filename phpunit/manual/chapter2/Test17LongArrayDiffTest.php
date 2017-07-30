<?php

declare(strict_types=1);

namespace ApplicationPHPUnit\Chapter2;

use PHPUnit\Framework\TestCase;

class Test17LongArrayDiffTest extends TestCase
{
    public function testEquality() {
        $this->assertEquals(
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2,  3, 4, 5, 6, ],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 33, 4, 5, 6, ]
        );
    }
}
