<?php
	session_start();

	if (!isset($_SESSION["berhasil_login"]) and !isset($_SESSION["nim"]) and !isset($_SESSION["password"])){
		die("Anda tidak mempunyai akses ke halaman ini, silahkan <a href='login.php'>LOGIN</a>");
	}
	else{   	
    	include 'koneksi.php';

    	$qry = mysqli_query($konek, "SELECT * FROM akunmhs WHERE nim='$_SESSION[nim]'");
    	$row = mysqli_fetch_array($qry);

    	echo "Login berhasil, Selamat Datang <b>".$row["nama"]."</b><br><br>";

    	echo "NIM : ".$row['nim'].
    		 "<br>NAMA : ".$row['nama'].
    		 "<br>JENIS KELAMIN : ".$row['jk'].
    		 "<br>KELAS : ".$row['kelas'].
    		 "<br>FAKULTAS : ".$row['fakultas'].
    		 "<br>HOBI : ".$row['hobi'].
    		 "<br>ALAMAT : ".$row['alamat']."<br><br>";

    	echo "<a href=''>EDIT</a><br>";
    	echo "<a href='logout.php'>LOGOUT</a>";
	}
?>