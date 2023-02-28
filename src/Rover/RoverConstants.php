<?php

namespace App\Rover;

use App\Coordinate\Coordinate;
use App\Enum\DirectionEnum;
use App\States\EastDirectionState;
use App\States\NorthDirectionState;
use App\States\SouthDirectionState;
use App\States\WestDirectionState;

/**
 * Rover constants
 */
class RoverConstants
{
	/**
	 * @param Coordinate $coordinates
	 * @param string $direction
	 * @return EastDirectionState|NorthDirectionState|SouthDirectionState|WestDirectionState
	 */
	public static function roverDirectionState(Coordinate $coordinates, string $direction): EastDirectionState|SouthDirectionState|NorthDirectionState|WestDirectionState
	{
		return match ($direction) {
			DirectionEnum::NORTH => new NorthDirectionState($coordinates),
			DirectionEnum::SOUTH => new SouthDirectionState($coordinates),
			DirectionEnum::WEST => new WestDirectionState($coordinates),
			default => new EastDirectionState($coordinates),
		};
	}
}