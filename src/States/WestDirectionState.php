<?php

namespace App\States;

use App\Enum\DirectionEnum;

/**
 * West direction state
 */
class WestDirectionState extends RoverDirectionState implements RoverDirectionStateInterface
{
    /**
     * @return void
     */
    public function moveForward(): void
    {
        $this->coordinates->setX($this->coordinates->getX() - 1);
    }

    /**
     * @return SouthDirectionState
     */
    public function turnLeft(): SouthDirectionState
    {
        return new SouthDirectionState($this->coordinates);
    }

    /**
     * @return NorthDirectionState
     */
    public function turnRight(): NorthDirectionState
    {
        return new NorthDirectionState($this->coordinates);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return DirectionEnum::WEST;
    }
}