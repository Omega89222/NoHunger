<?php

namespace Omega892\NoHunger;

use pocketmine\plugin\PluginBase;
use Omega892\NoHunger\Events\PlayerEvents;
use pocketmine\Server;

class Main extends PluginBase {
    
    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents(new PlayerEvents(),$this);
       }
}