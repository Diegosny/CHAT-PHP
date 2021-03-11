<?php 
    $con = mysqli_connect("host", "usuario", "senha", "banco");
	mysqli_query($con, "SET time_zone='+00:00'");

	date_default_timezone_set("UTC");

	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		//you need to exit the script, if there is an error
		exit();
	}
?>
