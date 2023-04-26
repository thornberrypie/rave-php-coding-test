<?php

use App\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function test(): void
    {
        $response = HelloWorld::greet();
        $this->assertSame('Hello, World!', $response);
    }
}
