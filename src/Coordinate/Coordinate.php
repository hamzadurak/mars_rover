<?php

namespace App\Coordinate;

/**
 * Coordinate
 */
class Coordinate
{
	/**
	 * @var int
	 */
	public int $x;
	
	/**
	 * @var int
	 */
	public int $y;
	
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
	 * @param int $x
	 * @return void
	 */
	public function setX(int $x): void
	{
		if ($x > -1) {
			$this->x = $x;
		}
	}
	
	/**
	 * @param int $y
	 * @return void
	 */
	public function setY(int $y): void
	{
		if ($y > -1) {
			$this->y = $y;
		}
	}
	
	/**
	 * @return int
	 */
	public function getX(): int
	{
		return $this->x;
	}
	
	/**
	 * @return int
	 */
	public function getY(): int
	{
		return $this->y;
	}
	
	/**
	 * @return string
	 */
	public function __toString()
	{
		return "{$this->getX()} {$this->getY()}";
	}
}