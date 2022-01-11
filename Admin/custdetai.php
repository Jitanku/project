<?php
		include("conn.php");
		error_reporting(0);
		
	$query = " select * from cont_details ";	
	$data = mysqli_query($conn, $query);
		
		$total = mysqli_num_rows($data);
		$result = mysqli_fetch_assoc($data);
		
			echo $result[name]." ".$result[email]." ".$result[flat]." ".$result[area]." ".$result[lndmrk]." ".$result[town]." ".$result[state]." ".$result[zipcode]." ".$result[contno];
						
				if($total !=0)
				{
					echo " Table has record ";
				}
					else
						{
							echo " No records found ";
						}
?>