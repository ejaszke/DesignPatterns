<?php
namespace Eddo\Structural\Composite;

class Group implements ShootInterface
{
    private $persons = [];

    public function add(Person $person)
    {
        $this->persons [] = $person;
    }

    public function shoot(): int
    {
        return array_reduce(
            $this->persons,
            function ($sumShoots, $person) {
                return $person->shoot() + $sumShoots;
            },
            0);
    }
}