<?php

namespace App\States;

use App\Enum\DirectionEnum;

/**
 * East direction state
 */
class EastDirectionState extends RoverDirectionState implements RoverDirectionStateInterface
{
    /**
     * @return void
     */
    public function moveForward(): void
    {
        $this->coordinates->setX($this->coordinates->getX() + 1);
    }

    /**
     * @return NorthDirectionState
     */
    public function turnLeft(): NorthDirectionState
    {
        return new NorthDirectionState($this->coordinates);
    }

    /**
     * @return SouthDirectionState
     */
    public function turnRight(): SouthDirectionState
    {
        return new SouthDirectionState($this->coordinates);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return DirectionEnum::EAST;
    }
}