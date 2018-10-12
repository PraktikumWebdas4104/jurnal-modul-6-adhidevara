<?php error_reporting(0);
	if (isset($_POST['daftar'])) {
		include 'prosesREG.php';
	}

?>

<form method="POST" enctype="multipart/form-data">
	<h1>REGISTRASI AKUN</h1>
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" placeholder="Maks. 10 Karakter Angka"><font color="red"><?php echo $errNIMExist.$errNIMAngka.$errNIM10.$errNimKos; ?></font></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="Maks. 35 Karakter Huruf"><font color="red"><?php echo $errNAMAHuruf.$errNAMA35.$errNamaKos; ?></font></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>:</td>
			<td><input type="password" name="pass_mhs"><font color="red"><?php echo $errPassKos; ?></font></td>
		</tr>
		<tr>
			<td>JENIS KELAMIN</td>
			<td>:</td>
			<td><input type="radio" name="jk" value="Pria">Pria <input type="radio" name="jk" value="Wanita">Wanita <font color="red"><?php echo $errJkKos; ?></font></td>
		</tr>
		<tr>
			<td>KELAS</td>
			<td>:</td>
			<td><input type="radio" name="kls" value="D3MI-41-01">D3MI-41-01 <input type="radio" name="kls" value="D3MI-41-02">D3MI-41-02 <input type="radio" name="kls" value="D3MI-41-03">D3MI-41-03 <input type="radio" name="kls" value="D3MI-41-04">D3MI-41-04 <font color="red"><?php echo $errKlsKos; ?></font></td>
		</tr>
		<tr>
			<td>FAKULTAS</td>
			<td>:</td>
			<td><select name="fakultas">
					<option value="-1">Pilih Fakultas</option>
					<option value="Ilmu Terapan">Ilmu Terapan</option>
					<option value="Teknik Elektro">Teknik Elektro</option>
					<option value="Ekonomi Bisnis">Ekonomi Bisnis</option>
				</select>
			<font color="red"><?php echo $errFakultasKos; ?></font></td>
		</tr>
		<tr>
			<td>HOBI</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi[]" value="Editing">Editing <input type="checkbox" name="hobi[]" value="Olahraga">Olahraga <input type="checkbox" name="hobi[]" value="Gaming">Gaming <font color="red"><?php echo $errHobiKos; ?></font></td>
		</tr>
		<tr>
			<td>ALAMAT</td>
			<td>:</td>
			<td><textarea name="alamat"></textarea> <font color="red"><?php echo $errAlamatKos; ?></font></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="daftar" value="DAFTAR"></td>
		</tr>
	</table>
</form>

<?php
	echo "<h1>".$regSukses."</h1><br>
		  <a href='login.php'>LOGIN</a>";
?>