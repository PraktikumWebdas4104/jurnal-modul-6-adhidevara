<?php
	session_start();

	unset($_SESSION["berhasil_login"]);
	unset($_SESSION["nim"]);
	unset($_SESSION["password"]);
	unset($_SESSION["nama"]);
 
	session_destroy();
		echo "Logout Berhasil, <a href='login.php'>LOGIN</a>";
?>