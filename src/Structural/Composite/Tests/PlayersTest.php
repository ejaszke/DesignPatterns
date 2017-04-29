<?php
namespace Eddo\Structural\Composite\Tests;

use Eddo\Structural\Composite\Group;
use Eddo\Structural\Composite\Person;
use Eddo\Structural\Composite\Players;

class PlayersTest extends \PHPUnit_Framework_TestCase
{
    public function testPlayersShouldComputeShootsFromAllChildren()
    {
        $group = new Group();
        $group->add(new Person(50));
        $group->add(new Person(40));

        $players = new Players();
        $players->add($group);
        $players->add(new Person(50));
        $players->add(new Person(40));

        $this->assertEquals(180, $players->shoot());
    }
}