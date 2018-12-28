<?php
	$servename ="localhost";
	$username = "root";
	$password = "";
	$namaDB ="pwluas";

	
	$kon = new mysqli($servename,$username,$password);
	$selectDB = mysqli_select_db($kon, $namaDB);
/*
if ($kon) {
		echo "koneksi berhasil ";
		if ($selectDB) {
			echo "database ditemukan";
		}else{
			echo "database ";
		}

	}else{
		echo "koneksi gagal";
	}
	*/
	/**
	* 
	*/
	
  ?>
