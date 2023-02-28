<?php

namespace App\States;

use App\Enum\DirectionEnum;

/**
 * South direction state
 */
class SouthDirectionState extends RoverDirectionState implements RoverDirectionStateInterface
{
    /**
     * @return void
     */
    public function moveForward(): void
    {
        $this->coordinates->setY($this->coordinates->getY() - 1);
    }

    /**
     * @return EastDirectionState
     */
    public function turnLeft(): EastDirectionState
    {
        return new EastDirectionState($this->coordinates);
    }

    /**
     * @return WestDirectionState
     */
    public function turnRight(): WestDirectionState
    {
        return new WestDirectionState($this->coordinates);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return DirectionEnum::SOUTH;
    }
}