<?php

use PHPUnit\Framework\TestCase;

final class GreetingTest extends TestCase
{
    public function testGreeting()
    {
	    $greeting = new Johanan\FirstPackage\Greeting();

        $hour = date('H');
        if ($hour < 12) {
            $this->assertEquals('Good morning', $greeting->say());
        } else {
            $this->assertEquals('Good afternoon', $greeting->say());
        }
    }
}
