# Example-Plugin :abacus:
Example Plugin for EnderX software Minecraft Bedrock :battery:

# API :bee:
Written with PocketMine 3.28.0 with EnderX fork with additional Scoreboard and PMQuery.

### Required imports
The following imports are necessary to use in plugin
```php
use pocketmine\pmquery\PMQuery;
use pocketmine\pmquery\PmQueryException;
use pocketmine\utils\Scoreboard;
```

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

- Get the information of the Query
```php
$query['GameName'];         // Returns the server software being used
$query['HostName'];         // Returns the server host name
$query['Protocol'];         // Returns the protocol version allowed to connect
$query['Version'];          // Returns the client version allowed to connect
$query['Players'];          // Returns the number of players on the server currently
$query['MaxPlayers'];       // Returns the maximum player count of the server
$query['ServerId'];         // Returns the raknet server id
$query['Map'];              // Returns the default world name
$query['GameMode'];         // Returns the default gamemode
$query['NintendoLimited'];  // Returns the status of Nintendo's limitation to join
$query['IPv4Port'];         // Returns the ipv4 port number
$query['IPv6Port'];         // Returns the ipv6 port number
$query['Extra'];            // I still don't know what this info is
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
