<?php
namespace Eddo\Structural\Composite;

class Person implements ShootInterface
{
    private $power;

    public function __construct(int $power)
    {
        $this->power = $power;
    }

    public function shoot(): int
    {
        return $this->power;
    }
}