<?php

declare(strict_types=1);

namespace ApplicationPHPUnit\Chapter2;

use PHPUnit\Framework\TestCase;

class Test13ExpectedErrorTest extends TestCase
{
    /**
     * @expectedException PHPUnit\Framework\Error
     */
    public function testFailingInclude()
    {
        include 'not_existing_file.php';
    }
}
