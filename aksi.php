<?php
$nim = $_POST['nim'];
$nama = $_POST['name'];
$gender = $_POST['jenis_kelamin'];
$status = $_POST['status'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Tugas lintang</title>
  </head>
  <body>
    <div class="container">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NIM</th>
      <th scope="col">NAMA</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Status</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?= $nim; ?></td>
      <td><?= $nama; ?></td>
      <td><?= $gender; ?></td>
      <td><?= $status; ?></td>
      <td><?= $no_hp; ?></td>
      <td><?= $alamat; ?></td>
    </tr>
    
  

  </tbody>
</table>
<p>Nim yang Anda Masukan Adalah <b><?= $nim; ?></b></p>
<p>Nama yang Anda Masukan Adalah <b><?= $nama; ?></b></p>
<p>Gender yang Anda Masukan Adalah <b><?= $gender; ?></b></p>
<p>Status yang Anda Masukan Adalah <b><?= $status; ?></b></p>
<p>Nomor HP yang Anda Masukan Adalah <b><?= $no_hp; ?></b></p>
<p>Alamat yang Anda Masukan Adalah <b><?= $alamat; ?></b></p>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
