<?php
//include koneksi
include('koneksi.php');
?>
<html>
  <head>
    <title>Perpustakaan Terpadu</title>
    <link rel="icon" href="img/dejalu.gif" type="image/gif">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php include("header.php") ?>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light p-3" style="background: #E9967A">
    <div class="container-fluid" id="navbarContent">
      <ul class="nav navbar-nav mr-auto">
        <li class="navbar-brand" style="color: black;">
          <b>Perpustakan Terpadu</b>
        </li>

        <li>
          <a class="nav-link active" href="bukuku.php" style="color: black">Peminjaman<span class="sr-only"></span></a>
        </li>

        <li>
          <a class="nav-link active" href="tambah.php" style="color: black">Tambah Buku<span class="sr-only"></span></a>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li>
          <a class="nav-link active" href="logout.php" style="color: black">Keluar</a>
        </li>
      </ul>
    </div>
    </nav>
 <div class="container-full-bg jumbotron" style="background-color: #F0F8FF">
  <h1 style="font-size: 67px; margin-top: 40px; margin-bottom: 40px" align="center"><b>Galeri Buku</b></h1>
<div class="d-flex justify-content-center">
 <div class="row row-cols-1 row-cols-md-3">
       
  <?php 
    $sql = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id_buku DESC") or die(mysqli_error($koneksi));

  if (mysqli_num_rows($sql) > 0) {
          # code...
          while ($data = mysqli_fetch_assoc($sql)) {
            echo '
            <div class="col mb-5 d-flex justify-content-around">
              <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src='.$data['foto_buku'].' alt='.$data['judul'].'  style="width:300px;height:500px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>'.$data['judul'].'</h1>
                        <p>'.$data['deskripsi'].'</p>
                        <p style="font-weight: bold;">'.$data['penerbit'].'</p>
                        <a href="edit.php?id_buku='.$data['id_buku'].'" class="badge badge-warning" style="font-size:120%">Edit</a>
                        <a href="delete.php?id_buku='.$data['id_buku'].'" class="badge badge-danger" style="font-size:120%" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
                    </div>
                  </div>
              </div>
            </div> 

            ';
          }
        }else{
          echo '
            <tr>
              <td colspan="6">Tidak ada data.</td>
            </tr>
          ';
        }
  ?>

</div>
</div>
</div>
</div>
</body>
</html>
