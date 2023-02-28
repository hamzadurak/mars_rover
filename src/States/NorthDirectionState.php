<?php

namespace App\States;

use App\Enum\DirectionEnum;

/**
 * North direction state
 */
class NorthDirectionState extends RoverDirectionState implements RoverDirectionStateInterface
{
    /**
     * @return void
     */
    public function moveForward(): void
    {
        $this->coordinates->setY($this->coordinates->getY() + 1);
    }

    /**
     * @return WestDirectionState
     */
    public function turnLeft(): WestDirectionState
    {
        return new WestDirectionState($this->coordinates);
    }

    /**
     * @return EastDirectionState
     */
    public function turnRight(): EastDirectionState
    {
        return new EastDirectionState($this->coordinates);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return DirectionEnum::NORTH;
    }
}