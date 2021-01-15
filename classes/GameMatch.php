<?php

// 11 _ sukuriama Match klase su savybemis
class GameMatch {

	private $teams;
	private $date;
	private $time;
	private $place;

	// 12 _ konstruktorius
	public function __construct($teams)
	{
		// 13 _ nustatomos propercio reiksme is argumento
		$this->teams = $teams;
	}

		// 14 _ geteriai savybems gauti (informacijos istraukimui is objektu)
	public function getTeams()
	{
		return $this->teams;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function getTime()
	{
		return $this->time;
	}

	public function getPlace()
	{
		return $this->place;
	}

		// 15 _ seteriai savybiu irasymui i objekta)
	public function setTeams($teams)
	{
		$this->teams = $teams;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function setTime($time)
	{
		$this->time = $time;
	}

	public function setPlace($place)
	{
		$this->$place = $place;
	}
}