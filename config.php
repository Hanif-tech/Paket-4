<?php
	$koneksi = mysqli_connect('127.0.0.1','root','','world'); 

	 //cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
	if (mysqli_connect_errno()) {
		echo "Gagal melakukan koneksi ke MySql: ".mysqli_connect_error();
	}
 ?>