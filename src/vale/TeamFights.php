<?php

namespace vale;

use pocketmine\math\Vector3;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class TeamFights extends PluginBase implements Listener{

  /** @var array $readTeam*/
  public static $redTeam = [];
  
    /** @var array blueTeam*/
  public static $blueTeam = [];
  
  
  public const START = "Started";
  
  public const NOT_ENOUGH_PLAYERS = "must start with 4 players";
  
  public static $gameTime = 600;
  
  /**var @array $arenas*/
  
  public static $arenas = ["map1"];
  
  private static $instance;
  
  
  
  
  public function onEnable(): void{
  self::$instance = $this;
   @mkdir($this->getDataFolder();

foreach(self::$worlds as $world){

if(!$this->getServer()->isLevelLoaded($world){

$this->getServer()->loadLevel($world);

  
}
   }
   }

  
  


}
