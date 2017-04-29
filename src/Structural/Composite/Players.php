<?php

namespace Eddo\Structural\Composite;

class Players implements ShootInterface
{

    private $players = [];

    public function add(ShootInterface $player)
    {
        $this->players [] = $player;
    }

    public function shoot() : int
    {
        return array_reduce(
            $this->players,
            function ($sumShoots, $player) {
                return $player->shoot() + $sumShoots;
            },
            0);
    }

}