<?php
$server = "localhost";
$user = "root";
$pwd = "";
$dbname = "hashid";
$db = mysqli_connect($server, $user, $pwd, $dbname);
if (!$db){
	echo "Error";
}
?>
