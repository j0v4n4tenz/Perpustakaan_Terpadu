<?php 
include('koneksi.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan Terpadu - Edit</title>
	<link rel="icon" href="img/dejalu.gif" type="image/gif">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="fluit-container mb-5">

	</div>

	<div class="container" style="margin-top:20px">
		<h2>Edit Data Buku</h2>
		
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
		?>
		
		
		<?php
		if(isset($_POST['submit'])){
			$judul			    = $_POST['judul'];
			$deskripsi			= $_POST['deskripsi'];
			$penerbit	        = $_POST['penerbit'];
			$foto_buku		    = $_POST['foto_buku'];
			
			$sql = mysqli_query($koneksi, "UPDATE buku SET judul='$judul', deskripsi='$deskripsi', penerbit='$penerbit', foto_buku='$foto_buku' WHERE id_buku='$id_buku'") or die(mysqli_error($koneksi));
			
			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="edit.php?id_buku='.$id_buku.'";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>
		
		<form action="edit.php?id_buku=<?php echo $id_buku; ?>" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">JUDUL BUKU</label>
				<div class="col-sm-10">
					<input type="text" name="judul" class="form-control" size="4" value="<?php echo $data['judul']; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">DESKRIPSI BUKU</label>
				<div class="col-sm-10">
					<input type="text" name="deskripsi" class="form-control" size="4" value="<?php echo $data['deskripsi']; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">PENERBIT</label>
				<div class="col-sm-10">
					<input type="text" name="penerbit" class="form-control" size="4" value="<?php echo $data['penerbit']; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">GAMBAR BUKU</label>
				<div class="col-sm-10">
					<input type="text" name="foto_buku" class="form-control" size="4" value="<?php echo $data['foto_buku']; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
					<a href="admin.php" class="btn btn-warning">KEMBALI</a>
				</div>
			</div>
		</form>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>