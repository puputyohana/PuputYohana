<?php 
	include 'config.php';

	$id_member = $_GET['id_member'];
	mysqli_query($config,"delete from tbl_member where id_member='$id_member'");
	 
	header("location:index.php");
	 
?>