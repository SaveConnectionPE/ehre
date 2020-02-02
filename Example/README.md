## Example Plugin!

<iframe src="https://discordapp.com/widget?id=672467530694262796&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>


**Main.php**

<iframe src="https://saveconnectionpe.github.io/ehre/Example/Plugins/project1/src/Example/Main.php"></iframe>
```php
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
```

**plugin.yml**


```yaml
name: Example
version: 1.0
api: [3.0.0]
author MaybeYou
main: Example\Main
```


Zum Exaple Plugin geht es <a title="Hier" href="https://saveconnectionpe.github.io/ehre/Example/Plugins/project1/src/Example/Main.php" target="_blank">Main.php</a>
