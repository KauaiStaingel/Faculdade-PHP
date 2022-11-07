<html>
<head>
<meta charset ="UTF-8"/>
<title>Exercicio 4</title>
</head>
<body>
<h1>Kauai</h1>
<div>
<?php
 $sex = $_GET["param1"];
 $hight = $_GET["param2"];
 $isItMan = $sex== "M";
 $maleCal = (72.7*$hight) -58.2;
 $femaleCal = (62.1*$hight)-44.7;
 
 if($isItMan)
	 echo "O peso ideal eh de $maleCal";
 else 
	 echo "O peso ideal eh de $femaleCal";
 
 
	 
?>
</div>
</body>
</html>