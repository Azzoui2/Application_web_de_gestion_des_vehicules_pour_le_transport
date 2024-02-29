<?php

$connection= mysqli_connect("localhost","root","","transport");

session_start();

	$id = $_GET['veh_id'];

	$DelSql = "DELETE FROM `vehicle` WHERE veh_id=$id";

	$res = mysqli_query($connection, $DelSql);
	if ($res) {
		header("Location:buslist.php");
	}else{
		echo "Failed to delete";
	}

 ?>