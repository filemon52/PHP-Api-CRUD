<?php
include "koneksi.php";
	
	$username = "";
	$password = "";
	$level = "";
	$fullname = "";
	$id = "";

	if (isset($_POST['btnregister'])) {

 			$username = $_POST['username'];
 			$password = $_POST['password'];
 			$level = $_POST['level'];
 			$fullname = $_POST['fullname'];

 	$data =  "INSERT INTO users VALUES('', '$username', '$password', '$level', '$fullname')";
	mysqli_query($conn,$data);
	header('location: PHP-api.php');
	} 
	$hasil = mysqli_query($conn,"SELECT * FROM users");

	
?>