<html>
<head>
<meta charset ="UTF-8"/>
<title>Exercicio 7</title>
</head>
<body>
<h1>Kauai</h1>
<div>
<?php
$firstNumber = $_GET["param1"];
$secondNumber = $_GET["param2"];
if($firstNumber > $secondNumber){
	echo "$firstNumber eh maior que $secondNumber";
}
else if($firstNumber < $secondNumber){
	echo "$secondNumber eh maior que $firstNumber";
}else {
	echo "os numeros sao iguais" ;
}
?>
</div>
</body>
</html>