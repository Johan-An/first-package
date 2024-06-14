<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class GreetingTest extends TestCase
{
    public function testGreeting(): void
    {
	$greeting = new Johanan\FirstPackage\Greeting();
	
        $this->assertEquals('hello', $greeting->say());
    }
}
