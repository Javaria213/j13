<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<style>
		body{
			font-size: 25px;
			text-align: center;
			background-color: #ffcc99

		}
		h1{
			
			color: #800000;
			
		}
	</style>
</head>
<body>
	<h1>Table of 2</h1>
<?php
$x=2;
	for ($y=1; $y<=10 ; $y++) { 
		echo $x." x ".$y." = ".$x*$y."<br><br>";
	}

?>
</body>
</html>