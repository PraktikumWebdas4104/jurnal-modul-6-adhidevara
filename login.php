<?php error_reporting(0);
	if (isset($_POST['submit'])) {
		session_start();

		include 'koneksi.php';

		$nimSalah = $passSalah = " ";
		$nim = $_POST['nim'];
		$pass = $_POST['pass'];

		$sql = "SELECT nim, password FROM akunmhs WHERE nim='$nim'";
		$qry = mysqli_query($konek,$sql);
		$row = mysqli_fetch_array($qry);

		if ($nim == $row['nim']) {
			if ($pass == $row['password']) {
				$_SESSION["berhasil_login"]=1;
        		$_SESSION["nim"]=$row['nim'];
        		$_SESSION["password"]=$row['password'];
        		$_SESSION["nama"]=$row['nama'];
        		header("location:menu.php");
			}
			else{
				$passSalah = " <font color='red'><b>*</b>PASSWORD SALAH</font>";
			}
		}
		else{
			$nimSalah = " <font color='red'><b>*</b>NIM SALAH</font>";
		}
	}
?>

<form method="POST">
	<h1>LOGIN AKUN</h1>
	<table>
		<tr>
			<td>NIM</td>
			<td align="right">:</td>
			<td><input type="text" name="nim"><?php echo $nimSalah; ?></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td align="right">:</td>
			<td><input type="password" name="pass"><?php echo $passSalah; ?></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="LOGIN"></td>
			<td><a href="formREG.php">Registrasi</a></td>
		</tr>
	</table>
</form>

