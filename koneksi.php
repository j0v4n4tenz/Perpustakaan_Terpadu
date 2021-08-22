<?php
	ob_start();

	if(!isset($_SESSION)){
		session_start();
	}
	
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'perpustakaan_terpadu';

	$koneksi = mysqli_connect($host, $username, $password, $db);
?>