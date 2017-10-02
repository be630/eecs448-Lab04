<?php

	$user = $_Post["userName"];
	$pass = $_Post["passWord"];
	$box1Amount = $_Post["numberOf1"];
	$box2Amount = $_Post["numberOf2"];
	$box3Amount = $_Post["numberOf3"];
	$shippingType = $_Post["typeOfShip"];
	
	$subT1 = 5 * $box1Ammount;
	$subT2 = 25 * $box2Ammount;
	$subT3 = 100 * $box3Ammount;
	
	$shipCost = 0;
	
	if($shippingType == "Free")
	{
		$shipCost = 0;
	}
	if($shippingType == "threeDay")
	{
		$shipCost = 5;
	}
	if($shippingType == "overNight")
	{
		$shipCost = 50;
	}
	
	
	echo "Welcome!<br>";
	echo "Your userName is: " . $user . "<br>";
	echo "Your userName is: " . $pass . "<br>";
	
	echo "<table>";
	echo "<tr><td></td><td> Quantity </td><td> Cost Per Item</td><td> Sub Total</td></tr>";
	echo "<tr><td>Box1</td><td>" . $box1Amount . "</td><td> $5 </td><td>" . $subT1 . "</td></tr>";
	echo "<tr><td>Box1</td><td>" . $box2Amount . "</td><td> $25 </td><td>" . $subT2 . "</td></tr>";
	echo "<tr><td>Box1</td><td>" . $box3Amount . "</td><td> $100 </td><td>" . $subT3 . "</td></tr>";
	echo "<tr><td>Shipping</td><td>" . $shippingType . "</td><td>" . $shipCost . "</td></tr>";
	echo "<tr><td>Total Cost</td><td>" . $shipCost + $subT1 + $subT2 + $subT3 . "</td></tr>";
	





?>