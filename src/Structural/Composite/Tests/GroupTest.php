<?php
namespace Eddo\Structural\Composite\Tests;

use Eddo\Structural\Composite\Group;
use Eddo\Structural\Composite\Person;

class GroupTest extends \PHPUnit_Framework_TestCase
{
    public function testGroupShouldComputeShoots()
    {
        $group = new Group();
        $group->add(new Person(50));
        $group->add(new Person(40));
        $this->assertEquals(90, $group->shoot());
    }
}