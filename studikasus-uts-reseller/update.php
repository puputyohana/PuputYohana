<?php 

include 'config.php';
 
		$id_member = $_POST['id_member'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];
		$no_hp = $_POST['no_hp'];
		$tgl_bergabung = $_POST['tgl_bergabung'];

	mysqli_query($config,"update tbl_member set nama='$nama', jk='$jk', tgl_lahir='$tgl_lahir',alamat='$alamat',email='$email',no_hp='$no_hp',tgl_bergabung='$tgl_bergabung' where id_member='$id_member'");

	header("location:index.php");
	 
?>