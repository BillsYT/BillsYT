<?php
$name = $_GET['name'];
$art = $_GET['Art'];
$wunsche = $_GET['wunsche'];

echo  $name;

$empfanger = "introshopbestellung@gmail.com";
$betreff = "Bestellung";
$nachricht = "$name hat $art bestellt! \nMit den Wünschen: $wunsche. \n";

mail($empfanger, $betreff, $nachricht);



?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Deine Bestellung wurde abgeschickt</title>
		<link href="desing.css" rel="stylesheet">
	</head>
	<body>
		<h1>Bestellung abgeschickt</h1>
		<p>Deine Bestellung ist maxmial in einer Woche auf unseren <a href="https://www.youtube.com/channel/UCnih9Sn80E0-33Clb2xgyWQ?view_as=subscriber">Youtube Kanal</a> veröffentlicht!</p>
		<p>Um nichts zu verpassen aktivier die Glocke und du wirst immer benachrichtigt, wenn wir ein Video hochladen!</p>
		<p> Hier gehts zurück zur <a href="home.html">Homepage</a></p>
	
		
	</body>
	
	
</html>