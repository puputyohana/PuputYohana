<?php
	$config = mysqli_connect("localhost","root","","percetakan");

	if(mysqli_connect_error()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}
?>