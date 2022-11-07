<html>
<head>
<meta charset ="UTF-8"/>
<title>Exercicio 6</title>
</head>
<body>
<h1>Kauai</h1>
<div>
<?php

 $age = $_GET["param1"];
 $infantilA =$age >=5 && $age <=7 ;
 $infantilB =$age <=10;
 $juvenilA =$age <=13;
 $juvenilB =$age <=17;
 
 $defaultMsg = "o nadador esta na categoria";

 
 if($age == $infantilA ){
	 echo " $defaultMsg Infantil A";
 } 
 else if ($age == $infantilB ){
	 echo "$defaultMsg Infantil B";
 }
  else if ($age == $juvenilA ){
	 echo "$defaultMsg Juvenil A";
 } 
  else if ($age == $juvenilB ){
	 echo "$defaultMsg Juvenil B";
 }
 else{
	 echo "$defaultMsg Adulto";
 }
?>
</div>
</body>
</html>