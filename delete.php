<?php
 	include "koneksi.php";
	$id = $_GET['id'];
	mysqli_query($conn, "DELETE FROM users WHERE id='$id'");
	header("location:PHP-api.php");
	 ?>