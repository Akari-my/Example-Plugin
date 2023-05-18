<?php

namespace Test;

use pocketmine\plugin\PluginBase;
use pocketmine\pmquery\PMQuery;
use pocketmine\scheduler\ClosureTask;
use pocketmine\utils\Scoreboard;

class Main extends PluginBase{

	public function onEnable(){
		$this->getLogger()->info("§7» Example Plugin for EnderX");
		$this->getLogger()->info("§7» by Akari_my from EnderX Studios");
		$this->getLogger()->info("§7» discord/support: https://discord.gg/XBvyPrmr");
		$this->getScheduler()->scheduleRepeatingTask(new ClosureTask(function (): void{
			$this->scoreboard();
		}), 20);
	}

	public function scoreboard(): void{
		foreach($this->getServer()->getOnlinePlayers() as $player){
			Scoreboard::remove($player, "sb");

			$zeqa = PMQuery::query("zeqa.net", 19132);
			$twerion = PMQuery::query("bedrock.twerion.net", 19132);

			Scoreboard::create($player,"Example Plugin", "sb");
			ScoreBoard::addEntry($player, 1, "§fZeqa §8»§a " . $zeqa['Players'], "sb");
			ScoreBoard::addEntry($player, 2, "§fTwerion §8»§a " . $twerion['Players'], "sb");
		}
	}


}