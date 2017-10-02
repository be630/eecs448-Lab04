<?php
  
	echo "<table>";

		for($r = 1; $r <= 10; $r++)
		{
			echo "<tr>";
			
			for($c = 1; $c <= 10; $c++)
			{
				$populate = $r * $c;
				echo "<td> $populate </td>";
			}
			
			echo "</tr>";
			
			
		}
		
	echo "</table>";
?>