<?php
	$con=mysqli_connect("localhost","root","password","gyyq_database");

	// Check connection
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		//echo "Success";
	}
?>