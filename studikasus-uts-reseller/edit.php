<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
		<br/>
		<h2>
			<b>Data Reseller Toko Online
		</h2>
		<br/>
		<br/>
		<br/>

		<?php
			include 'config.php';
			$id_member = $_GET['id_member'];
			$data = mysqli_query($config,"select * from tbl_member where id_member='$id_member'");
			while($d = mysqli_fetch_array($data)){
		?>

	<form method="post" action="update.php">
		<table>
			<tr>
				<td style="padding: 5px;">Id Member</td>
				<td style="padding: 5px;"><input type="hidden" name="id_member" value="<?php echo $d['id_member']; ?>"></td>
			</tr>
			<tr>			
				<td style="padding: 5px;">Nama</td>
				<td style="padding: 5px;"><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
			</tr>
			<tr>
				<td style="padding: 5px;">Jenis Kelamin</td>
				<td style="padding: 5px;">
				<input type="radio" name="jk" value="Laki-laki"> Laki-laki<br>
    			<input type="radio" name="jk" value="Perempuan"> Perempuan<br></td>
			</tr>
			<tr>			
				<td style="padding: 5px;">Tanggal Lahir</td>
				<td style="padding: 5px;"><input type="date" name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>"></td>
			</tr>
			<tr>			
				<td style="padding: 5px;">Alamat</td>
				<td style="padding: 5px;"><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
			</tr>
			<tr>			
				<td style="padding: 5px;">Email</td>
				<td style="padding: 5px;"><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
			</tr>
			<tr>			
				<td style="padding: 5px;">No. Hp</td>
				<td style="padding: 5px;"><input type="text" name="no_hp" value="<?php echo $d['no_hp']; ?>"></td>
			</tr>
			<tr>			
				<td style="padding: 5px;">Tanggal Bergabung</td>
				<td style="padding: 5px;"><input type="date" name="tgl_bergabung" value="<?php echo $d['tgl_bergabung']; ?>"></td>
			</tr>
			<tr>
				<td style="padding: 5px;"></td>
				<td style="padding: 5px;"><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
	<?php
		}
	?>

</html>