<?php

namespace App\Plateau;

use App\Enum\CommandEnum;
use App\Rover\Rover;
use RuntimeException;

/**
 * Plateau
 */
class Plateau
{
	/**
	 * @var int
	 */
	private int $x;
	
	/**
	 * @var int
	 */
	private int $y;
	
	/**
	 * @var Rover
	 */
	public Rover $rover;
	
	/**
	 * @param int $x
	 * @param int $y
	 */
	public function __construct(int $x, int $y)
	{
		$this->x = $x;
		$this->y = $y;
	}
	
	/**
	 * @param Rover $rover
	 * @return void
	 * @throws RuntimeException
	 */
	public function locateRover(Rover $rover): void
	{
		if ($rover->getCoordinates()->getX() > $this->x) {
			throw new RuntimeException();
		}
		if ($rover->getCoordinates()->getY() > $this->y) {
			throw new RuntimeException();
		}
		
		$this->rover = $rover;
	}
	
	/**
	 * @param string $command
	 * @return void
	 */
	public function moveRover(string $command): void
	{
		switch ($command) {
			case CommandEnum::MOVE_FORWARD:
				$this->rover->moveForward();
				break;
			case CommandEnum::TURN_LEFT:
				$this->rover->turnLeft();
				break;
			case CommandEnum::TURN_RIGHT:
				$this->rover->turnRight();
				break;
		}
	}
}