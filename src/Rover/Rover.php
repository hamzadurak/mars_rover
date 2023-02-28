<?php

namespace App\Rover;

use App\Coordinate\Coordinate;
use App\States\EastDirectionState;
use App\States\NorthDirectionState;
use App\States\SouthDirectionState;
use App\States\WestDirectionState;

/**
 * Rover
 */
class Rover
{
	/**
	 * @var WestDirectionState|NorthDirectionState|SouthDirectionState|EastDirectionState
	 */
    private WestDirectionState|NorthDirectionState|SouthDirectionState|EastDirectionState $roverState;

    /**
     * @param Coordinate $coordinates
     * @param string $direction
     */
    public function __construct(readonly Coordinate $coordinates, string $direction)
    {
        $this->roverState = RoverConstants::roverDirectionState($coordinates, $direction);
    }

    /**
     * @return void
     */
    public function moveForward(): void
    {
        $this->roverState->moveForward();
    }
	
	
	/**
	 * @return EastDirectionState|SouthDirectionState|NorthDirectionState|WestDirectionState
	 */
    public function turnLeft(): EastDirectionState|SouthDirectionState|NorthDirectionState|WestDirectionState
    {
        return $this->roverState = $this->roverState->turnLeft();
    }
	
	
	/**
	 * @return EastDirectionState|NorthDirectionState|SouthDirectionState|WestDirectionState
	 */
    public function turnRight(): EastDirectionState|SouthDirectionState|NorthDirectionState|WestDirectionState
    {
        return $this->roverState =  $this->roverState->turnRight();
    }

    /**
     * @return Coordinate
     */
    public function getCoordinates(): Coordinate
    {
        return $this->coordinates;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getCoordinates()->getX() . ' ' . $this->getCoordinates()->getY() . ' ' . $this->roverState->__toString();
    }
}