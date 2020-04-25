<?php

declare(strict_types=1);

namespace david\emptyWorld;

use pocketmine\level\generator\GeneratorManager;
use pocketmine\plugin\PluginBase;

class Loader extends PluginBase {

    public function onEnable() {
        GeneratorManager::addGenerator(EmptyWorldGenerator::class, "emptyworld");
    }
}