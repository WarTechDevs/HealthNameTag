<?php

/**
 * Created by PhpStorm.
 * User: War Tech aka Johnathen
 * Date: 11/2/2018
 * Time: 7:13 PM
 */

namespace HealthNameTag;

use pocketmine\Server{Server, Player};

use pocketmine\Plugin;

use pocketmine\scheduler\Task;

class HealthNameTag extends Task

    public function __construct($plugin) {

        $this->plugin = $plugin;
    }

    public function onRun(currentTick) {
        foreach ($this->plugin->getServer()->getOnlinePlayers() as $p) {
            $player = $p;
            $p->getScoreTag("Players Health " "$player->getHealth () / $player->getmaxHealth() * 230 )");
        }
    }
}
