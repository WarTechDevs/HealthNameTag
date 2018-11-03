<?php

/**
 * Created by PhpStorm.
 * User: War Tech aka Johnathen
 * Date: 11/2/2018
 * Time: 7:13 PM
 */

namespace HealthNameTag;

use pocketmine\Server;

use pocketmine\PluginBase;

use pocketmine\event\Listener;

class HealthNameTag extends PluginBase implements Listener{

    public function onEnable(){
        $this->getServer()->getLogger()->info("HealthNameTag Plugin By WarTechDevs Enabled");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getScheduler()->scheduleRepeaetingTask->(new HealthNameTag($this), 10);
    }

    public function onDisbale(){
        $this->getServer()->getLogger()->info("HealthNameTag Plugin By WarTechDevs Disabled");
    }
}
