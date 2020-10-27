<?php
function perulangan($jumlah, $indeks=1){
	if($indeks <= $jumlah){
		perulangan($jumlah, $indeks+1);
		echo "Perulangan ke- ".$indeks."<br/>";
	}
}
perulangan(5);
?>