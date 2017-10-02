<?php

	$user = $_POST["userName"];
	$pass = $_POST["passWord"];
	$box1Amount = $_POST["numberOf1"];
	$box2Amount = $_POST["numberOf2"];
	$box3Amount = $_POST["numberOf3"];
	$shippingType = $_POST["typeOfShip"];
	
	$subT1 = 5 * $box1Amount;
	$subT2 = 25 * $box2Amount;
	$subT3 = 100 * $box3Amount;
	
	$shipCost = 0;
	$shipName;
	$finalCost = $shipCost + $subT1 + $subT2 + $subT3;
	
	if($shippingType == "Free")
	{
		$shipCost = 0;
		$shipName = 'Free';
	}
	if($shippingType == "threeDay")
	{
		$shipCost = 5;
		$shipName = 'Three Day';
	}
	if($shippingType == "overNight")
	{
		$shipCost = 50;
		$shipName = 'Night';
	}
	
	
	echo "Welcome!<br>";
	echo "Your userName is: " . $user . "<br>";
	echo "Your passWord is: " . $pass . "<br><br>";
	
	echo "<table>";
	echo "<tr><td></td><td> Quantity </td><td> Cost Per Item</td><td> Sub Total</td></tr>";
	echo "<tr><td>Box1</td><td>" . $box1Amount . "</td><td> $5 </td><td>$" . $subT1 . "</td></tr>";
	echo "<tr><td>Box2</td><td>" . $box2Amount . "</td><td> $25 </td><td>$" . $subT2 . "</td></tr>";
	echo "<tr><td>Box3</td><td>" . $box3Amount . "</td><td> $100 </td><td>$" . $subT3 . "</td></tr>";
	echo "<tr><td>Shipping</td><td>" . $shipName . "</td><td>$" . $shipCost . "</td><td></td></tr>";
	echo "<tr><td>Total Cost</td><td>$" . $finalCost . "</td></tr>";
	echo "</table>";
	





?>
