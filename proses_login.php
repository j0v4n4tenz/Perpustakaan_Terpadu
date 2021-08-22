<?php
	include 'koneksi.php';

	$email = $_POST['email'];
	$pass = ($_POST['pass']);

	$sql = "SELECT * FROM user WHERE email = '{$email}' and pass = '{$pass}'";
	$query = mysqli_query($koneksi, $sql);
	$count = mysqli_num_rows($query);

	if(!$query){
		die("Query gagal". mysqli_error($koneksi));
	}
	if(!empty($email) && (!empty($pass))){
		
		if($count==0){
			echo "<script>alert('Email atau kata sandi salah');</script>";
			echo "<script>location = 'login.php';</script>";
		}
		else{
			while ($row = mysqli_fetch_array($query)){	
                $nama = $row['nama'];
                $email = $row['email'];
                $pass = $row['pass'];
			}
			if ($email =="admin@gmail.com" && $pass =="admin") {
			echo "<script>location = 'admin.php';</script>";
		   }
 
			elseif($email == $email && $pass == $pass){
				header("Location: home.php");
				$_SESSION['email'] = $email;
				$_SESSION['nama'] = $nama;	
			}
			
	    	else{
	    		echo "<script>alert('Pengguna tidak ditemukan');</script>";
	    		echo "<script>location = 'login.php';</script>";
			}
		}
	}
	elseif(empty($email)){
		echo "<script>alert('Email tidak boleh kosong');</script>";
		echo "<script>location = 'login.php';</script>";
	}
	else{
		echo "<script>alert('Kata sandi tidak boleh kosong');</script>";
		echo "<script>location = 'login.php';</script>";
	}
?>