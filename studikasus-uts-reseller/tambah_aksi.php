<?php
		
		include 'config.php';

		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];
		$no_hp = $_POST['no_hp'];
		$tgl_bergabung = $_POST['tgl_bergabung'];
		 
		mysqli_query($config, "insert into tbl_member values('','$nama','$jk','$tgl_lahir','$alamat','$email','$no_hp','$tgl_bergabung')");
		header("location:index.php");
		
	?>