<html>
<head>
<meta charset ="UTF-8"/>
<title>Exercicio 8</title>
</head>
<body>
<h1>Kauai</h1>
<div>
<?php


$firstNoteP1 = $_GET["param1"];
$secondNoteP2 = $_GET["param2"];
$thirdNoteAtividade = $_GET ["param3"];

$sum = $firstNoteP1 + $secondNoteP2 + $thirdNoteAtividade;

if($sum >=12){
	echo "Passou";
} else {
	echo "Nao Passou";
}


?>
</div>
</body>
</html>