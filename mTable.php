<?php
  
	echo "<table>";

		for($r = 0; $r <= 11; $r++)
		{
			echo "<tr>";
			
			for($c = 0; $c <= 11; $c++)
			{
				echo "<td>";
				if($r == 0)
				{
					if($c == 0)
					{
						echo "";
					}
					else
					{
						echo "$c";
					}
				}
				else if($c == 0)
				{
					if($r != 0)
					{
						echo "$r";
					}
				}
				else
				{
					$populate = $r * $c;
					echo "$populate";
				}
				
				echo "</td>";
			}
			
			echo "</tr>";
		}
		
	echo "</table>";
?>