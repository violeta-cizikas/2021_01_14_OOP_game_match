<?php
// 17 
require("./classes/Player.php");
require("./classes/Team.php");
require("./classes/GameMatch.php");
require("./const/constants.php");
// require("./functions/functions.php");

// 18 _ kuriami zaidejai
$players = [];

// 19
for($i = 0; $i < 10; $i++) {

	// 21 _ suzinoma kokio ilgio masyvas
	// ir sugeneruojamas rand skaicius nuo nulio iki masyvo ilgio,
	// ir istraukiamas tas atsitiktinis skaicius is masyvo
	// count(php) grazina masyvo ilgi
	$name = NAMES[rand(0, count(NAMES) - 1)];

	// 22
	$surname = SURNAMES[rand(0, count(SURNAMES) - 1)];

	// 23
	$height = rand(177, 230);

	// 24 
	$position = POSITION_TYPES[rand(0, count(POSITION_TYPES) - 1)];

	// 25
	$number = rand(1, 10);

	// 20 _ kuriamas zaidejo objektas is zaidejo klases
	$player = new Player($name, $surname, $height, $position, $number);

	// 34 _ array push i masyvo gala prideda dar viena elementa
	array_push($players, $player);
}

// 26 _ masyvas is dvieju komandu
$teams = [];
	
// 28
for($i = 0; $i < 2; $i++) {

	// 29 _ treneris - vardas ir pavarde sugeneruoti iš konstantu masyvu NAMES ir SURNAMES
	$coachNameAndSurname = NAMES[rand(0, count(NAMES) - 1)] . " " . SURNAMES[rand(0, count(SURNAMES) - 1)];

	// 30 _ komandos pavadinimas sudarytas iš konstantu masyvu TEAM_ADJECTIVES ir TEAM_NOUNS
	$teamName = TEAM_ADJECTIVES[rand(0, count(TEAM_ADJECTIVES) - 1)] . " " . TEAM_NOUNS[rand(0, count(TEAM_NOUNS) - 1)];

	// 31 _ komandos logo - random logo iš assets/logos
	$teamLogo = "logos/img-" . rand(1, 120) . ".svg";

	// 32 _ zaidėjai (5 žaidejai, perduoti masyvu)
	// array_slice - array karpymas (duotas masyvas, nuo kelinto, ilgis)
	$teamPlayers = array_slice($players, 5 * $i, 5);

	// 33 _ kuriama naujas komandos objektas is komandos klases
	$team = new Team($coachNameAndSurname, $teamName, $teamLogo, $teamPlayers);

	// 35 _ array push i masyvo gala prideda dar viena elementa
	array_push($teams, $team);
}

// 36 _ kuriamas naujas matchas / argumentas is 26 zingsnio
$match = new GameMatch($teams);

// 37 _ strtotime - generuojama (matcho) data nuo
$dateFrom = strtotime("now");

// 38 _ strtotime - generuojama (matcho) data iki 3 men.
$dateTo = strtotime("+3 months");

// 39 _ kuriama atsitiktine data nuo dabar iki 3 men.
$date = rand($dateFrom, $dateTo);

// 40 _ datestampas paverciamas i stringo formata
$date = date("Y-m-d", $date);

// 41 _ strtotime - generuojamas (matcho) laika nuo
$timeFrom = strtotime("today 18:30:00");

// 42 _ strtotime - generuojamas (matcho) laikas iki
$timeTo = strtotime("today 22:30:00");

// 43 _ kuriama atsitiktine data nuo iki
$time = rand($timeFrom, $timeTo);

// 44 _ timetampas paverciamas i stringo formata
$time = date("H:i", $time);

// 45 _ irasomas data ir laikas i match
// naudojant seterius bei argumentus is 40 ir 44 zingsniu
$match->setDate($date);
$match->setTime($time);

?>

<!-- 16 -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css?v=2">
	<title>2021_01_14_OOP_game_match</title>
</head>

<body>
	<!-- 46 -->
	<h1><?php echo $match->getDate()?></h1>
	<h1><?php echo $match->getTime()?></h1>

	<div class="center">
		<button onclick="window.location.reload()">Refresh</button>
	</div>

	<div class="matchContainer">
		<!-- 48 -->
		<?php
			foreach ($teams as $key => $team):
		?>
		<!-- 47 -->
		<div class="teamContainer">

			<div>
				<img src="assets/<?php echo $team->getTeamLogo()?>"/>
			</div>

			<div class="informationContainer">
				<p>Team name: <?php echo $team->getTeamName()?></p>
				<p>Coach: <?php echo $team->getTrainer()?></p>
			</div>

			<div>
				<table>
					<tr>					
						<th class="information">
							Player Name
						</th>

						<th class="information">
							Player height in cm
						</th>

						<th class="information">
							Player position
						</th>

						<th class="information">
							Player Shirt Number
						</th>						
					</tr>
					<!-- 49 -->
					<?php
						foreach ($team->getPlayers() as $key => $player):
					?>
						<tr>
							<th>
								<?php echo $player->getName() . " " . $player->getSurname()?>
							</th>

							<th>
								<?php echo $player->getHeight()?>
							</th>

							<th>
								<?php echo $player->getPosition()?>
							</th>

							<th>
								<?php echo $player->getNumber()?>
							</th>
						</tr>
					<?php
						endforeach;
					?>
				</table>
			</div>

		</div>
		<?php
			endforeach;
		?>
	</div>

</div>

</body>
</html>