<?php

namespace xenialdan\PocketAI\component\minecraft\behavior;

use xenialdan\PocketAI\component\BaseComponent;
use xenialdan\PocketAI\entitytype\AIEntity;
use xenialdan\PocketAI\entitytype\AIProjectile;

class _random_stroll implements BaseComponent
{
    protected $name = "minecraft:behavior.random_stroll";
    private $priority;
    private $speed_multiplier;

    public function __construct($priority, $speed_multiplier)
    {
        $this->priority = $priority;
        $this->speed_multiplier = $speed_multiplier;
    }

    /**
     * Applies the changes to the mob
     * @param AIEntity|AIProjectile $entity
     */
    public function apply($entity): void
    {
        // TODO: Implement apply() method.
    }

    /**
     * Removes the changes from the mob
     * @param AIEntity|AIProjectile $entity
     */
    public function remove($entity): void
    {
        // TODO: Implement remove() method.
    }
}