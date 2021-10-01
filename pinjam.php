<?php 
include('koneksi.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan Terpadu - Pinjam</title>
	<link rel="icon" href="img/dejalu.gif" type="image/gif">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	//using bootstrap 5
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	
	<div class="container" style="margin-top:20px">
		<h2>Tambah Data Buku</h2>
		
		<hr>
		
		<?php
		if(isset($_GET['id_buku'])){
			$id_buku = $_GET['id_buku'];
			$select = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id_buku'") or die(mysqli_error($koneksi));
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			}else{
				$data = mysqli_fetch_assoc($select);
			}
		}

		if(isset($_POST['submit'])){
			$id                   = $_POST['id'];
			$nama_peminjam		  = $_POST['nama_peminjam'];
			$tanggal_peminjaman   = $_POST['tanggal_peminjaman'];
			$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
			$judul		          = $_POST['judul'];
			
			$cek = mysqli_query($koneksi, "SELECT * FROM pinjam WHERE id='$id'") or die(mysqli_error($koneksi));
			
			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO pinjam(id, nama_peminjam, tanggal_peminjaman, tanggal_pengembalian, judul) VALUES('$id', '$nama_peminjam', '$tanggal_peminjaman', '$tanggal_pengembalian', '$judul	')") or die(mysqli_error($koneksi));
				
				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="home.php";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, ID sudah terdaftar.</div>';
			}
		}
		?>
		
		<form action="pinjam.php" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">JUDUL BUKU</label>
				<div class="col-sm-10">
					<input type="text" name="judul" class="form-control" size="4" value="<?php echo $data['judul']; ?>" readonly required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">ID USER</label>
				<div class="col-sm-10">
					<input type="text" name="id" class="form-control" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NAMA PEMINJAM</label>
				<div class="col-sm-10">
					<input type="text" name="nama_peminjam" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TANGGAL PEMINJAMAN</label>
				<div class="col-sm-10">
					<input type="date" name="tanggal_peminjaman" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TANGGAL PEGEMBALIAN</label>
				<div class="col-sm-10">
					<input type="date" name="tanggal_pengembalian" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
				</div>
			</div>
		</form>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>
