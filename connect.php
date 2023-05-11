<?php 
	$password = getenv('MYSQL_PASSWORD');
	  $conn = mysqli_connect("localhost","root",$password,"region_db_eraffle_mindanao");
	// $conn = mysqli_connect("localhost","root",$password,"south_e-raffle");
	if(!$conn)
	{
		echo mysqli_connect_error($conn);
	}
	

?>