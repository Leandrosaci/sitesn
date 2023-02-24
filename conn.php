<?php


$mysqli = new mysqli('containers-us-west-157.railway.app', 'root', 'LZwvOsVfHbvL93oboN9t','railway','6330');
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
	exit();
}else{
	echo "connected ";	
}

?> 
