<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
	<BR/>
		<h2>
			<b>Data Reseller Toko Online Piyu-Piyu
		</h2>
		<br/>
		<br/>
		<br/>

	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>
				<td style="padding: 5px;">Id Member</td>
				<td style="padding: 5px;"><input type="hidden" name="id_member"></td>
			</tr>
			<tr>			
				<td style="padding: 5px;">Nama</td>
				<td style="padding: 5px;"><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td style="padding: 5px;">Jenis Kelamin</td>
				<td style="padding: 5px;">
				<input type="radio" name="jk" value="Laki-laki"> Laki-laki<br>
    			<input type="radio" name="jk" value="Perempuan"> Perempuan<br></td>
			</tr>
			<tr>			
				<td style="padding: 5px;">Tanggal Lahir</td>
				<td style="padding: 5px;"><input type="date" name="tgl_lahir"></td>
			</tr>
			<tr>			
				<td style="padding: 5px;">Alamat</td>
				<td style="padding: 5px;"><input type="text" name="alamat"></td>
			</tr>
			<tr>			
				<td style="padding: 5px;">Email</td>
				<td style="padding: 5px;"><input type="text" name="email"></td>
			</tr>
			<tr>			
				<td style="padding: 5px;">No. Hp</td>
				<td style="padding: 5px;"><input type="text" name="no_hp"></td>
			</tr>
			<tr>			
				<td style="padding: 5px;">Tanggal Bergabung</td>
				<td style="padding: 5px;"><input type="date" name="tgl_bergabung"></td>
			</tr>
			<tr>
				<td style="padding: 5px;"></td>
				<td style="padding: 5px;"><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</html>
