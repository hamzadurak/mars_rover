<?php

namespace App\States;

use App\Coordinate\Coordinate;

/**
 * Rover direction state
 */
abstract class RoverDirectionState
{
	/**
	 * @var Coordinate
	 */
	protected Coordinate $coordinates;
	
	/**
	 * @param Coordinate $coordinates
	 */
	public function __construct(Coordinate $coordinates)
	{
		$this->coordinates = $coordinates;
	}
	
}