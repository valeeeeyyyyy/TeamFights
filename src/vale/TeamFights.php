<?php

namespace vale;

use pocketmine\math\Vector3;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class TeamFights extends PluginBase implements Listener{

  /** @var array $readTeam*/
  public static $redTeam = [];
  
    /** @var array $blueTeam*/
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
  
  $this->getScheduler()->scheduleRepeatingTask(new GameTask($this),20);
  

  
}
   }
   
   
   //i made this im school will cleanup code when home
   
   public static function ApplyTeam(Player $player, string $team){

     
     switch($team){

       case "red":
         //coding on phone aids asf
         if(!isset(self::$readTeam[$player->getName()]){
           self::$redTeam[$player->getName()] = true;
           $player->sendMessage("U joined read team");
        
   break;
           case "blue":
           if(!isset(self::$blueTeam[$player->getName()]){
           self::$blueTeam[$player->getName()] = true;
           $player->sendMessage("U joined blue team");
        
   break;
           }
              }
              
              public function noHitTeamate(EntityDamageByEntityEvent $event){
                
                $entity = $event->getEntity();
                $damager = $event->getDamager();
                
                if($entity && $damager instanceof Player){
                
                 if($event instanceof EntityDamageByEntityEvent){
                   if($this->isRed($entity) && $this->isRed($damager)){
                     
                     $event->setCancelled(true);
                   
                   }elseif($this->isBlue($entity) && $this->isBlue($damager){
                   
                     $event->setCancelled(true);
                   
                   }
                           
                 
                 }
            
                }
                                   }
                  public function isBlue(Player $player){
                return isset(self::$blueTeam[$player->getName()] = true;
              }
              
                             
                             
           public function isRed(Player $player){
                return isset(self::$redTeam[$player->getName()] = true;
                             }
                             
                             public function PlayerQuit(PlayerQuitEvent $event){
                               
                               $p = $event->getPlayer();
                               if(isset(self::$redTeam[$p->getName()]){
                                 unset(self::$redTeam[$p->getName()];
                             
                             }

                             }

   
