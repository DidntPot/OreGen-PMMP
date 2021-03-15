<?php

declare(strict_types = 1);

namespace OreGen;


use pocketmine\event\Listener;
use pocketmine\math\Vector3;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\scheduler\Task as PluginTask;
use pocketmine\utils\TextFormat as T;
use pocketmine\level\Level;
use pocketmine\block\Block;

class Main extends PluginBase implements Listener{

    public function onEnable(){

		$this->getServer()->getPluginManager()->registerEvents($this, $this);

	}
	
	    public function onBlockBreakEvent(BlockBreakEvent $e){

    	    $o = $e->getPlayer();
    	    $isim = $o->getName();
            $l = $o->getLevel();
            $b = $e->getBlock();
			
         	// Coal Generator:
            if($b->getId() == 16){
				$l->setblock(new Vector3($b->x,$o->y-1,$b->z), Block::get(16));
        		$l->setblock(new Vector3($b->x,$o->y+1,$b->z), Block::get(16));
        		$l->setblock(new Vector3($b->x,$o->y,$b->z), Block::get(0));
        		$l->setblock(new Vector3($b->x,$o->y+2,$b->z), Block::get(16));
        	}

            // Redstone Generator:
            if($b->getId() == 73){
				$l->setblock(new Vector3($b->x,$o->y-1,$b->z), Block::get(16));
                $l->setblock(new Vector3($b->x,$o->y+1,$b->z), Block::get(73));
        		$l->setblock(new Vector3($b->x,$o->y,$b->z), Block::get(0));
				$l->setblock(new Vector3($b->x,$o->y+2,$b->z), Block::get(73));
            }

            // Glowstone Generator:
            if($b->getId() == 89){
				$l->setblock(new Vector3($b->x,$o->y-1,$b->z), Block::get(16));
        		$l->setblock(new Vector3($b->x,$o->y+1,$b->z), Block::get(89));
        		$l->setblock(new Vector3($b->x,$o->y,$b->z), Block::get(0));
				$l->setblock(new Vector3($b->x,$o->y+2,$b->z), Block::get(89));
            }

        	// Lapis Generator:
        	if($b->getId() == 21){
				$l->setblock(new Vector3($b->x,$o->y-1,$b->z), Block::get(16));
        		$l->setblock(new Vector3($b->x,$o->y+1,$b->z), Block::get(21));
        		$l->setblock(new Vector3($b->x,$o->y,$b->z), Block::get(0));
				$l->setblock(new Vector3($b->x,$o->y+2,$b->z), Block::get(21));
        	}

        	// Iron Generator:
        	if($b->getId() == 15){
				$l->setblock(new Vector3($b->x,$o->y-1,$b->z), Block::get(16));
        		$l->setblock(new Vector3($b->x,$o->y+1,$b->z), Block::get(15));
        		$l->setblock(new Vector3($b->x,$o->y,$b->z), Block::get(0));
				$l->setblock(new Vector3($b->x,$o->y+2,$b->z), Block::get(15));
        	}

        	// Gold Generator:
        	if($b->getId() == 14){
				$l->setblock(new Vector3($b->x,$o->y-1,$b->z), Block::get(16));
        		$l->setblock(new Vector3($b->x,$o->y+1,$b->z), Block::get(14));
        		$l->setblock(new Vector3($b->x,$o->y,$b->z), Block::get(0));
				$l->setblock(new Vector3($b->x,$o->y+2,$b->z), Block::get(14));
        	}

        	// Diamond Generator:
        	if($b->getId() == 56){
				$l->setblock(new Vector3($b->x,$o->y-1,$b->z), Block::get(16));
        		$l->setblock(new Vector3($b->x,$o->y+1,$b->z), Block::get(56));
        		$l->setblock(new Vector3($b->x,$o->y,$b->z), Block::get(0));
				$l->setblock(new Vector3($b->x,$o->y+2,$b->z), Block::get(56));
        	}

			// Emerald Generator:
        	if($b->getId() == 133){
				$l->setblock(new Vector3($b->x,$o->y-1,$b->z), Block::get(16));
        		$l->setblock(new Vector3($b->x,$o->y+1,$b->z), Block::get(133));
        		$l->setblock(new Vector3($b->x,$o->y,$b->z), Block::get(0));
				$l->setblock(new Vector3($b->x,$o->y+2,$b->z), Block::get(133));
        	}
        	return;

        }
        
        public function onBlockPlaceEvent(BlockPlaceEvent $e){

    	    $o = $e->getPlayer();
    	    $isim = $o->getName();
            $l = $o->getLevel();
            $b = $e->getBlock();

            if($b->getId() == 247){
				$l->setblock(new Vector3($b->x,$b->y,$b->z), Block::get(16));       
        		$l->setblock(new Vector3($b->x+1,$b->y+1,$b->z+0), Block::get(16));        	
                $l->setblock(new Vector3($b->x+2,$b->y+1,$b->z+0), Block::get(73));            
                $l->setblock(new Vector3($b->x+3,$b->y+1,$b->z+0), Block::get(89));           
        		$l->setblock(new Vector3($b->x+4,$b->y+1,$b->z+0), Block::get(21));       	
        		$l->setblock(new Vector3($b->x+0,$b->y+1,$b->z+1), Block::get(15));        	
        		$l->setblock(new Vector3($b->x+0,$b->y+1,$b->z+2), Block::get(14));        	
        		$l->setblock(new Vector3($b->x+0,$b->y+1,$b->z+3), Block::get(56));        	       	
        		$l->setblock(new Vector3($b->x+0,$b->y+1,$b->z+4), Block::get(133));
				//----------------------------------------------------------------
				$l->setblock(new Vector3($b->x+1,$b->y+1,$b->z+1), Block::get(16));        	
                $l->setblock(new Vector3($b->x+2,$b->y+1,$b->z+2), Block::get(73));            
                $l->setblock(new Vector3($b->x+3,$b->y+1,$b->z+3), Block::get(89));           
        		$l->setblock(new Vector3($b->x+4,$b->y+1,$b->z+4), Block::get(21));       	
        		$l->setblock(new Vector3($b->x+1,$b->y+1,$b->z+1), Block::get(15));        	
        		$l->setblock(new Vector3($b->x+2,$b->y+1,$b->z+2), Block::get(14));        	
        		$l->setblock(new Vector3($b->x+3,$b->y+1,$b->z+3), Block::get(56));        	       	
        		$l->setblock(new Vector3($b->x+4,$b->y+1,$b->z+4), Block::get(133));
        	}
			
        	return;
        }
}