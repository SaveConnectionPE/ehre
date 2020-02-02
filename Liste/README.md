## Ehrenmann - Example Plugin


<center>
<p>Hier ein Beispiel's Plugin für PHP!</p>
</center>

**Main.php**
```php
<?php

namespace Example;

use pocketmine\{
  Server,
  Player
};
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
class Main extends PluginBase implements Listener{
```

<br><br>
**plugin.yml**
```yaml
name: Example
version: 1.0
api: [3.0.0, 4.0.0]
author: ExampleMaker
main: Example\Main
```
