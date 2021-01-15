<?php

// 6 _ sukuriama Team klase su savybemis
class Team {

	private $trainer;
	private $teamName;
	private $teamLogo;
	private $players;

	// 8 _ konstruktorius
	public function __construct($trainer, $teamName, $teamLogo, $players)
	{
		// 9 _ nustatomos properciu reiksmes is argumentu
		$this->trainer = $trainer;
		$this->teamName = $teamName;
		$this->teamLogo = $teamLogo;
		$this->players = $players;
	}

	// 10 _ geteriai savybems gauti
	public function getTrainer()
	{
		return $this->trainer;
	}

	public function getTeamName()
	{
		return $this->teamName;
	}

	public function getTeamLogo()
	{
		return $this->teamLogo;
	}

	public function getPlayers()
	{
		return $this->players;
	}

}