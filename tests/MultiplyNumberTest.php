<?php

namespace App\Test\MultiplyNumberTest;

use App\Component\MultiplyNumber;
use PHPUnit\Framework\TestCase;

class MultiplyNumberTest extends TestCase
{
    public function testAdd()
    {
        $multiply = new MultiplyNumber();
        $result = $multiply->add(30, 12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }
}
