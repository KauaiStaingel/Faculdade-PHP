<html>
<head>
<meta charset ="UTF-8"/>
<title>Exercicio 10</title>
</head>
<body>
<h1>Kauai</h1>
<div>
<?php

$numberN = $_GET["param1"];
$sum = 0;
for($i=1;$i<=$numberN;$i++){
	$sum+=$i;
	echo "$sum<br>";
}


?>
</div>
</body>
</html>