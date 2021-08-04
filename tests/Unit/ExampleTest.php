<?php

namespace Example\Tests\Unit;

use Example\Tests\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function it_encodes_integer()
    {
        $this->assertNotEquals(1, \Hashids::encode(1));
    }
}
