<!--deklarasi script php-->
<?php
	//memanggil file lain
	include 'inc.php';
	//menampilkan nilai dari var angka
	echo "$angka";
	echo "<br>";
	//logika selection
	if($angka==100){
		echo "Memuaskan";
	}elseif ($angka<100&&$angka>=85) {
		echo "Sangat Baik";
	}elseif ($angka<85&&$angka>=70) {
		echo "Baik";
	}elseif ($angka<70&&$angka>=55) {
		echo "Cukup";
	}elseif ($angka<55&&$angka>=0) {
		echo "Kurang";
	}
	
?>