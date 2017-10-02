<?php
  
	echo "<table>";

		for($r = 0; $r <= 100; $r++)
		{
			echo "<tr>";
			
			for($c = 0; $c <= 100; $c++)
			{
				echo "<td>";
				if($r == 0)
				{
					if($c == 0)
					{
						echo "";//prints the first blank index
					}
					else
					{
						echo "$c";//prints the col number in row 0
					}
				}
				else if($c == 0)
				{
					if($r != 0)
					{
						echo "$r";//prints the row number in col 0;
					}
				}
				else
				{
					$populate = $r * $c;
					echo "$populate";//prints the muiltiple of the row an col number
				}
				
				echo "</td>";
			}
			
			echo "</tr>";
		}
		
	echo "</table>";
?>