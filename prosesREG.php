<?php
	if (isset($_POST['daftar'])) {
		include 'koneksi.php';

		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$pass_mhs = $_POST['pass_mhs'];
		$jk = $_POST['jk'];
		$kls = $_POST['kls'];
		$fakultas = $_POST['fakultas'];
		$hobi = $_POST['hobi'];
		$alamat = $_POST['alamat'];
		$query = mysqli_query($konek, "SELECT * FROM akunmhs WHERE nim = '$nim'");
	  	$row = mysqli_fetch_array($query);

		if (!empty($nim)) { //Jika Diisi
			if (!empty($nama)) {
				if (!empty($pass_mhs)) {
					if (isset($jk)) { //Jika Di SET/PILIH
						if (isset($kls)) {
							if ($fakultas !== -1) {
								if (!empty($alamat)) {
									if (isset($hobi)) {
										if (strlen($nim)<=10) {
											if (is_numeric($nim) == TRUE) {
												if (strlen($nama)<=35) {
													if (preg_match("/^[a-zA-Z ]*$/",$nama)) {
														if ($nim !== $row['nim']) {

															if (isset($hobi[0]) && isset($hobi[1]) && isset($hobi[2])) {
										  											$sql = $konek->query("
										  								INSERT INTO `akunmhs` (`nim`, `nama`, `password`, `jk`, `kelas`, `fakultas`, `hobi`, `alamat`)
										  								               VALUES ('$nim', '$nama', '$pass_mhs', '$jk', '$kls', '$fakultas', '$hobi[0],$hobi[1],$hobi[2]', '$alamat')");
															$regSukses = "REGISTRASI BERHASIL";
										  										}
										  										else if (isset($hobi[0]) && isset($hobi[1])) {
										  											$sql = $konek->query("
										  								INSERT INTO `akunmhs` (`nim`, `nama`, `password`, `jk`, `kelas`, `fakultas`, `hobi`, `alamat`)
										  								               VALUES ('$nim', '$nama', '$pass_mhs', '$jk', '$kls', '$fakultas', '$hobi[0],$hobi[1]', '$alamat')");
															$regSukses = "REGISTRASI BERHASIL";
										  										}
										  										else if (isset($hobi[0]) && isset($hobi[2])) {
										  											$sql = $konek->query("
										  								INSERT INTO `akunmhs` (`nim`, `nama`, `password`, `jk`, `kelas`, `fakultas`, `hobi`, `alamat`)
										  								               VALUES ('$nim', '$nama', '$pass_mhs', '$jk', '$kls', '$fakultas', '$hobi[0],$hobi[2]', '$alamat')");
															$regSukses = "REGISTRASI BERHASIL";
										  										}
										  										else if (isset($hobi[1]) && isset($hobi[2])) {
										  											$sql = $konek->query("
										  								INSERT INTO `akunmhs` (`nim`, `nama`, `password`, `jk`, `kelas`, `fakultas`, `hobi`, `alamat`)
										  								               VALUES ('$nim', '$nama', '$pass_mhs', '$jk', '$kls', '$fakultas', '$hobi[1],$hobi[2]', '$alamat')");
															$regSukses = "REGISTRASI BERHASIL";
										  										}
										  										else if (isset($hobi[0])) {
										  											$sql = $konek->query("
										  								INSERT INTO `akunmhs` (`nim`, `nama`, `password`, `jk`, `kelas`, `fakultas`, `hobi`, `alamat`)
										  								               VALUES ('$nim', '$nama', '$pass_mhs', '$jk', '$kls', '$fakultas', '$hobi[0]', '$alamat')");
															$regSukses = "REGISTRASI BERHASIL";
										  										}
										  										else if (isset($hobi[1])) {
										  											$sql = $konek->query("
										  								INSERT INTO `akunmhs` (`nim`, `nama`, `password`, `jk`, `kelas`, `fakultas`, `hobi`, `alamat`)
										  								               VALUES ('$nim', '$nama', '$pass_mhs', '$jk', '$kls', '$fakultas', '$hobi[1]', '$alamat')");
															$regSukses = "REGISTRASI BERHASIL";
										  										}
										  										else if (isset($hobi[2])) {
										  											$sql = $konek->query("
										  								INSERT INTO `akunmhs` (`nim`, `nama`, `password`, `jk`, `kelas`, `fakultas`, `hobi`, `alamat`)
										  								               VALUES ('$nim', '$nama', '$pass_mhs', '$jk', '$kls', '$fakultas', '$hobi[2]', '$alamat')");
															$regSukses = "REGISTRASI BERHASIL";
										  										}

															/*$sql = $konek->query("
										  								INSERT INTO `akunmhs` (`nim`, `nama`, `password`, `jk`, `kelas`, `fakultas`, `hobi`, `alamat`)
										  								               VALUES ('$nim', '$nama', '$pass_mhs', '$jk', '$kls', '$fakultas', '$hobi', '$alamat')");
															$regSukses = "REGISTRASI BERHASIL";*/
														}
														else{
															$errNIMExist = "*NIM Telah Terdaftar";
														}
													}
													else{
														$errNAMAHuruf = "*NAMA Harus Karakter Huruf";
													}
												}
												else{
													$errNAMA35 = "*NAMA Harus Kurang Dari 35 Digit";
												}
											}
											else{
												$errNIMAngka = "*NIM Harus Karakter Angka";
											}
										}
										else{
											$errNIM10 = "*NIM Harus Kurang Dari 10 Digit";
										}
									}
									else{
										$errHobiKos = "*HOBI Tidak Boleh Kosong";
									}
								}
								else{
									$errAlamatKos = "*ALAMAT Tidak Boleh Kosong";
								}
							}
							else{
								$errFakultasKos = "*FAKULTAS Tidak Boleh Kosong";
							}
						}
						else{
							$errKlsKos = "*KELAS Tidak Boleh Kosong";
						}
					}
					else{
						$errJkKos = "*JENIS KELAMIN Tidak Boleh Kosong";
					}
				}
				else{
					$errPassKos = "*PASSWORD Tidak boleh Kosong";
				}
			}
			else{
				$errNamaKos = "*NAMA Tidak Boleh Kosong";
			}
		}
		else{
			$errNimKos = "*NIM Tidak Boleh Kosong";
		}
	}

?>