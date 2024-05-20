<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "database3";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("Failed to connect!");
}
/* else{
	echo "Successful";
}*/
?>