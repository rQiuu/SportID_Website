<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "sport_id";

$connect= new mysqli($hostname, $username, $password, $database); //query koneksi

	if($connect->connect_error) { //cek error
		die("Error : ".$connect->connect_error);
	}
?>