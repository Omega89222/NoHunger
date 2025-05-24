<?php

namespace Omega892\NoHunger\Events;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerExhaustEvent;

class PlayerEvents implements Listener
{
    public function Hunger(PlayerExhaustEvent $event)
    {
        $event->cancel();
    }
}