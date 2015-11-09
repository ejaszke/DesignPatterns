<?php

namespace Singleton\Tests;

use Singleton\Dog;

class DogTest extends \PHPUnit_Framework_TestCase
{
    public function testCanBorrowDog()
    {
        $dog = Dog::borrowMe();
        $this->assertInstanceOf('Singleton\Dog', $dog);
    }

    public function testCantBorrowAlreadyBorrowedDog()
    {
        Dog::borrowMe();
        $dog2 = Dog::borrowMe();
        $this->assertFalse($dog2);

    }
}