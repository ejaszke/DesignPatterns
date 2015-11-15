<?php

namespace Singleton\Tests;

use Singleton\Dog;

class DogTest extends \PHPUnit_Framework_TestCase
{
    public function testCanBorrowDog()
    {
        $dog = Dog::getInstance();
        $this->assertTrue($dog->borrowMe());
    }

    public function testCantBorrowAlreadyBorrowedDog()
    {
        $dog = Dog::getInstance();
        $dog->borrowMe();

        $secondDog = Dog::getInstance();
        $this->assertFalse($secondDog->borrowMe());

    }

    public function testItHasPrivateConstructor()
    {
        $reflectionOfDog = new \ReflectionClass('Singleton\Dog');
        $method = $reflectionOfDog->getMethod('__construct');
        $this->assertTrue($method->isProtected());
    }
}