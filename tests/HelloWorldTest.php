<?php

use PHPUnit\Framework\TestCase;

require __DIR__ . "/../src/HelloWorld.php";

class HelloWorldTest extends TestCase
{
    public function test(): void
    {
        $response = HelloWorld::greet();
        $this->assertSame('Hello, World!', $response);
    }
}
