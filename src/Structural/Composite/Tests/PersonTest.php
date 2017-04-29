<?php
namespace Eddo\Structural\Composite\Tests;

use Eddo\Structural\Composite\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    public function testPersonShouldShoot()
    {
        $person = new Person(40);
        $this->assertEquals(40, $person->shoot());
    }
}