<?php

namespace HealthNameTag;

use pocketmine\event\Listener;

use pocketmine\plugin\PluginBase;

use pocketmine\Server;

class HealthNameTag extends PluginBase implements Listener{
  
	public function onEnable(){
     $this->getServer()->getLogger()->info("HealthNameTag Plugin Enabled By WarTechDevs");
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	  	$this->getScheduler()->scheduleRepeatingTask(new HealthTask($this),10);
	}
    
	public function onDisable(){
        $this->getServer()->getLogger()->info("HealthNameTag Plugin Disabled By WarTechDevs");
	}
}
