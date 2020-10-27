<form action="index.php" method="post"> 

	<h1>Penilaian Mahasiswa</h1>

		Nama Mahasiswa : <br>

			<input type="text" name="nama"><br>

		Nilai Tugas : <br>

			<input type="text" name="tugas"><br>

		Nilai UTS : <br>

			<input type="text" name="uts"><br>

		Nilai UAS : <br>

			<input type="text" name="uas"><br><br>

			<input type="submit" name="Hitung"><br>

</form>

<?php


	$nama   = $_POST['nama'];

	$tugas  = $_POST['tugas'];

	$uts   = $_POST['uts'];

	$uas   = $_POST['uas'];

	$nilaiakhir = $_POST['nilaiakhir'];

	$nilaiakhir = ($tugas*0.3)+($uts*0.3)+($uas*0.4);


?>

<h1>Nilai Akhir Mahasiswa</h1>


Nama Mahasiswa : <?php echo "$nama"; ?> <br>

Nilai Tugas : <?php echo "$tugas"; ?><br>

Nilai UTS   : <?php echo "$uts"; ?><br>

Nilai UAS   : <?php echo "$uas"; ?><br>

 

<h4>Nilai Akhir : <?php echo "$nilaiakhir"; ?></h4>



<?php


	if ($nilaiakhir >=86 && $nilai_akhir <=100 )

		{ echo "Note : Selamat, proses belajarmu sangat baik, tingkatkan terus kemampuan codingnya...";}

	elseif ($nilaiakhir >=71 && $nilai_akhir <=85)

		{ echo " Note: Selamat, kamu sudah mulai memahami pemrgraman PHP, tingkatkan terus skil codingmu...";}

	elseif ($nilaiakhir >=60 && $nilai_akhir <=70)

		{ echo "Note: Upssssss.. skill codingmu perlu diasah ini gaes, tetap semangat belajar dan eksplore kemampuan y... ";}

	else

		{ echo "Note: -";}

	?>

