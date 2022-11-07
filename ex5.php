<html>
<head>
<meta charset ="UTF-8"/>
<title>Exercicio 5</title>
</head>
<body>
<h1>Kauai</h1>
<div>
<?php
 $number = $_GET["param1"];
 
for($i = 1;$i <$number;$i++){
	if($i%2==0){
		echo "$i,  ";
	}
}
	 
?>
</div>
</body>
</html>