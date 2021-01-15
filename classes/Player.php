<?php

// 1 _ sukuriama Player klase su savybemis
class Player {

	private $name;
	private $surname;
	private $height;
	private $position;
	private $number;


	// 2 _ konstruktorius
	public function __construct($name, $surname, $height, $position, $number)
	{
		// 4 _ nustatomos properciu reiksmes is argumentu
		$this->name = $name;
		$this->surname = $surname;
		$this->height = $height;
		$this->position = $position;
		$this->number = $number;
	}

	// 5 _ geteriai savybems gauti
	public function getName()
	{
		return $this->name;
	}

	public function getSurname()
	{
		return $this->surname;
	}

	public function getHeight()
	{
		return $this->height;
	}

	public function getPosition()
	{
		return $this->position;
	}

	public function getNumber()
	{
		return $this->number;
	}
}