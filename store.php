<?php
$products = array(
	array(
		"titel"=>"Call of Duty",
		"soort"=>"Shooter",
		"prijs"=>59.95
	),
	array(
		"titel"=>"Rocket League",
		"soort"=>"Sport",
		"prijs"=>19.95
	),
	array(
		"titel"=>"Assassins Creed",
		"soort"=>"RP",
		"prijs"=>49.95
	)
);
var_dump($products);
echo "_________________________________________\r\n";
$prijzen = array();
$lengtes = array();
foreach ($products as $p) {
	$prijzen[] = $p["prijs"];
	$lengtes[] = strlen($p["titel"]);
}
$gemiddeldp = round(array_sum($prijzen)/count($prijzen),2);
$gemiddeldt = round(array_sum($lengtes)/count($lengtes));
echo "Gemiddelde prijs: €".$gemiddeldp."\r\n";
echo "Gemiddelde lengte van titel: $gemiddeldt karakters";
?>