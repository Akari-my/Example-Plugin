# Example-Plugin :abacus:
Example Plugin for EnderX software Minecraft Bedrock

# API :bee:
Written with PocketMine 3.28.0 with EnderX fork with additional Scoreboard and PMQuery.

# Add this in onEnable 	:battery:
```php
// This code schedules the periodic execution of the "scoreboard()" method every 20 time units using the application's "scheduler".
$this->getScheduler()->scheduleRepeatingTask(new ClosureTask(function (): void{
			$this->scoreboard();
		}), 20);
```
</details>


# Create variables with PMQuery custom :spider_web:
```php
// PMQuery Takes Zeqa and Twerion servers
$zeqa = PMQuery::query("zeqa.net", 19132);
$twerion = PMQuery::query("bedrock.twerion.net", 19132);
```
</details>

- Get the players
```php
$zeqa['Players']
$twerion['Players']
```
</details>

# Create Scoreboards :desktop_computer:
```php
public function scoreboard(): void{
		foreach($this->getServer()->getOnlinePlayers() as $player){
                        // remove scoreboard
			Scoreboard::remove($player, "sb");

			$zeqa = PMQuery::query("zeqa.net", 19132);
			$twerion = PMQuery::query("bedrock.twerion.net", 19132);
      
                        // Add Scoreboard
			Scoreboard::create($player,"Example Plugin", "sb");
      
                        // add Scoreboard addEntry
			ScoreBoard::addEntry($player, 1, "§fZeqa §8»§a " . $zeqa['Players'], "sb");
			ScoreBoard::addEntry($player, 2, "§fTwerion §8»§a " . $twerion['Players'], "sb");
		}
	}
}
```
</details>
