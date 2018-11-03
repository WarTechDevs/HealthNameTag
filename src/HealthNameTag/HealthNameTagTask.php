<?php

namespace HealthNameTag;

use pocketmine\Plugin;

use pocketmine\{Server, Player};

use pocketmine\scheduler\Task;

class HealthNameTagTask extends Task {
    public function __construct($plugin){
        $this->plugin = $plugin;
    }

    public function onRun($currentTick){
        foreach($this->plugin->getServer()->getOnlinePlayers() as $p){
            $player = $p;
            $p->setScoreTag("Players Health "($player->getHealth() / $player->getMaxHealth() * 20));
        }
    }
}
