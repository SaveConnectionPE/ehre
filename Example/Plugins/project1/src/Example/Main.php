<?php

namespace Example;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{
  
   public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("Plugin enabled!");
  }
  
  public function onDisable(){
    $this->getLogger()->info("Plugin disabled!");
  }
