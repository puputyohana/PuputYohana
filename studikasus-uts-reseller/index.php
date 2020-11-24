<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
	<BR/>
		<h2>
			<b>Data Reseller Toko Online
		</h2>
		<br/>
		<a href="tambah.php">Tambah Data</a>
		<br/>
		<br/>
		<table border="1">
			<tr>
				<th style="padding: 5px;">No. </th>
				<th style="padding: 5px;">Nama</th>
				<th style="padding: 5px;">Jenis Kelamin</th>
				<th style="padding: 5px;">Tanggal Lahir</th>
				<th style="padding: 5px;">Alamat</th>
				<th style="padding: 5px;">Email</th>
				<th style="padding: 5px;">No. HP</th>
				<th style="padding: 5px;">Tanggal Bergabung</th>
				<th style="padding: 5px;">OPSI</th>
			</tr>
			<?php
				include 'config.php';
				$no = 1;
				$data = mysqli_query($config, "select * from tbl_member");
				while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td style="text-align:center; padding: 5px;"><?php echo $no++; ?></td>
				<td style="width:200px; padding: 5px;"><?php echo $d['nama']; ?></td>
				<td style="width:50px; padding: 5px;"><?php echo $d['jk']; ?></td>
				<td style="width:50px; padding: 5px;"><?php echo $d['tgl_lahir']; ?></td>
				<td style="width:200px; padding: 5px;"><?php echo $d['alamat']; ?></td>
				<td style="width:180px; padding: 5px;"><?php echo $d['email']; ?></td>
				<td style="width:100px; padding: 5px;"><?php echo $d['no_hp']; ?></td>
				<td style="width:50px; padding: 5px;"><?php echo $d['tgl_bergabung']; ?></td>
				<td style="width:150px; text-align:center; padding: 0px;">
					<a href="edit.php?id_member=<?php echo $d['id_member']; ?>">EDIT</a> ||
					<a href="hapus.php?id_member=<?php echo $d['id_member']; ?>">HAPUS</a>
				</td>
			</tr>
		<?php
		}
		?>
	</center>
</body>
</html>