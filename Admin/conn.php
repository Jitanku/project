
				<!--- Starting Connection Part --->

	<?php

		$dbservername="localhost";
		$dbusername="root";
		$dbpass="";
		$dbname="pharmacy";
		$conn =  mysqli_connect($dbservername,$dbusername,$dbpass,$dbname);
		
			if($conn)
			{
				echo "";
			}
				else
				{
					echo "Connection Failed";
				}
	?>
		
				<!--- Ending Connection Part --->