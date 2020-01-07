<!DOCTYPE html>
<html>
<head>
	<title>Meal Day</title>
	<style>
		body{
			
		background-color: pink;
		}
		h1{
			text-align: center;
			color:  #cc0000;
		}
		p
		{
			font-size: 35px;
			color: #cc0000;
		}
		#day{
			text-align: center;
		}
		input[type="text"]
		{
			width: 45%;
			height:45px;
			font-size: 20px;
		}
		input[type='submit']
		{
			width: 15%;
			height: 45px;
			border-radius: 20%;
			font-size: 30px;
		}
		input[type='submit']:hover{
			background-color: lightgrey;
			cursor: pointer;
			border-right: 3px #cc0000;
			border-bottom: 3px #cc0000; 
		}
	</style>
</head>
<body>
	<h1>Food Menu</h1>
	<form id="day" action="" method="post">
		<h2>
			Enter Day:
		</h2>
		<br>
		<input type="text" placeholder="Enter the Day for Today's Meal" name="day">
		<br><br>
		<input type="submit" name="submit">
	</form>
	<p>
		<b>Menu Is :</b> 
	</p>
	<?php
	if (isset($_POST['submit'])) {
	 	$day=$_POST['day'];
	 if ($day=="monday") {
	 	echo "Today's Meal Is Pasta";
	 }
	 elseif ($day=="tuesday") {
	 	echo "Today's Meal Is Egg Fried Rice";
	 }
	 elseif ($day=="wednesday") {
	 	echo "Today's Meal Is Soup and Chow mein";
	 }
	 elseif ($day=="thursday") {
	 	echo "Today's Meal IS Spring Roll and Fried Rice";
	 }
	 elseif ($day=="friday") {
	 	echo "Today's Meal IS Dumplings";
	 }
	 elseif ($day=="saturday") {
	 	echo "Today's Meal IS Fried Shrimps and Cashew";
	 }
	 elseif ($day=="sunday") {
	 	echo "Today's Meal ISSpicy Tofu";
	 }
	 else{
	 	echo "Please Enter day Carefully";
	 }
	}
	?>
</body>
</html>