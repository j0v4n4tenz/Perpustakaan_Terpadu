<?php
	require_once 'koneksi.php';

	$nama = ucwords($_POST['nama']);
	$email = $_POST['email'];
	$pass = ($_POST['pass']);
	$konfirmasi_pass = ($_POST['konfirmasi_pass']);

	$sql = "INSERT INTO user(nama, email, pass) VALUES ('$nama', '$email', '$pass')";
	$sql2 = "SELECT email FROM user where email = '$email'";
	$cek_email = mysqli_num_rows(mysqli_query($koneksi, $sql2));

	if($cek_email > 0){
		echo "<script>alert('Email Sudah Terdaftar');</script>";
		echo "<script>location = 'login.php';</script>";
	}
	else{
		if($pass == $konfirmasi_pass){
			if($koneksi->query($sql)===TRUE){
				echo "<script>alert('Registrasi Berhasil');</script>";
				echo "<script>location = 'login.php';</script>";
			}
			else{
				echo "<script>alert('Gagal Registrasi');</script>";
				echo "<script>location = 'login.php';</script>";
			}
		}
		else{
			echo "<script>alert('Konfirmasi Password Tidak Sesuai');</script>";
			echo "<script>location = 'login.php';</script>";
		}
	}

	$koneksi->close();
?>