<?php
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


    <style type="text/css">
      #book {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      #book td, #book th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #book tr:nth-child(even){background-color: #f2f2f2;}

      #book tr:hover {background-color: #ddd;}

      #book th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light p-3" style="background: #E9967A">
    <div class="container-fluid" id="navbarContent">
      <ul class="nav navbar-nav mr-auto">
        <li class="navbar-brand" style="color: black;">
          <b>Perpustakan Terpadu</b>
        </li>

        <li>
          <a class="nav-link active" href="home.php" style="color: black">Home<span class="sr-only"></span></a>
        </li>

      <ul class="nav navbar-nav navbar-right">
        <li>
          <a class="nav-link active" href="logout.php" style="color: black">Keluar</a>
        </li>
      </ul>
    </div>
    </nav>
 <div class="container-full-bg jumbotron" style="background-color: #F0F8FF">
  <h1 style="font-size: 67px; margin-top: 40px; margin-bottom: 40px" align="center"><b>Daftar Buku Yang Dipinjam</b></h1>
<div class="d-flex justify-content-center">
 <div class="row row-cols-1 row-cols-md-3">
       
  <?php 
    $sql = mysqli_query($koneksi, "SELECT * FROM pinjam ORDER BY id DESC") or die(mysqli_error($koneksi));

  if (mysqli_num_rows($sql) > 0) {
    echo '
        <table id="book">
            <tr>
              <th>JUDUL</th>
              <th>Tanggal Peminjaman</th>
              <th>Tanggal Pengembalian</th>
            </tr>
    ';  
          # code...
          while ($data = mysqli_fetch_assoc($sql)) {
            echo '
                <tr>
                  <td>'.$data['judul'].'</td>
                  <td><center>'.$data['tanggal_peminjaman'].'</center></td>
                  <td><center>'.$data['tanggal_pengembalian'].'</center></td>
                </tr>
            ';
               }
            echo '
            </table>
            ';
         
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
