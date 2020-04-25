<?php

declare(strict_types=1);

namespace david\emptyWorld;

use pocketmine\level\ChunkManager;
use pocketmine\level\generator\Generator;
use pocketmine\math\Vector3;
use pocketmine\utils\Random;

class EmptyWorldGenerator extends Generator {

    /** @var array */
    protected $settings;

    /**
     * EmptyWorldGenerator constructor.
     *
     * @param array $settings
     */
    public function __construct(array $settings = []) {
        $this->settings = $settings;
    }

    /**
     * @return array
     */
    public function getSettings(): array {
        return $this->settings;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return "emptyworld";
    }

    /**
     * @param ChunkManager $level
     * @param Random $random
     */
    public function init(ChunkManager $level, Random $random) : void{
        parent::init($level, $random);
    }

    /**
     * @param int $chunkX
     * @param int $chunkZ
     */
    public function generateChunk(int $chunkX, int $chunkZ): void {

    }

    /**
     * @param int $chunkX
     * @param int $chunkZ
     */
    public function populateChunk(int $chunkX, int $chunkZ): void {

    }

    /**
     * @return Vector3
     */
    public function getSpawn() : Vector3 {
        return new Vector3(128, 128, 128);
    }
}