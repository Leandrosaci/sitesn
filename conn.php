<?php
$db_name = "railway";
$mysql_username = "root";
$mysql_password = "LZwvOsVfHbvL93oboN9t";
$server_name = "containers-us-west-157.railway.app";


$mysqli = new mysqli('localhost', 'root', '1234', 'oficina');
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
	exit();
}else{
	echo "connected ";	
}

?> 