<?php


$mysqli = new mysqli('railway:6330', 'root', 'LZwvOsVfHbvL93oboN9t', 'containers-us-west-157.railway.app');
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
	exit();
}else{
	echo "connected ";	
}

?> 
