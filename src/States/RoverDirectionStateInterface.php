<?php

namespace App\States;

/**
 * Rover direction interface
 */
interface RoverDirectionStateInterface
{
    /**
     * @return void
     */
    public function moveForward(): void;

    /**
     * @return RoverDirectionStateInterface
     */
    public function turnLeft(): self;

    /**
     * @return RoverDirectionStateInterface
     */
    public function turnRight(): self;
}