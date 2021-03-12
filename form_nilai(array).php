<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> 
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light btn-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <h6>Sistem Penilaian</h6>
        </li>
    </div>
  </div>
</nav>
<br/>

<h3>Form Nilai Siswa</h3><hr/>

<!--- Form --->

<div class="container">
  <div class="row">
    <div class="col-md-3">
      
    </div>
    <div class="col-md-6">
      <form class="form-horizontal" method="GET" action="array_siswa.php">
        <table>
          <tr>
            <td><b>Nama Lengkap</b></td>
            <td><input type="teks" name="nama" value="" size="30" placeholder="Masukkan Nama" /></td>
          </tr>
          <tr>
            <td><b>Nim</b></td>
            <td><input type="teks" name="nim" value="" size="15" placeholder="NIM"/></td>
          </tr>
          <tr>
            <td><b>Mata Kuliah</b></td>
            <td>
            <select name="matkul">
              <option value=""></option>
              <option value="DDP">Dasar-Dasar Pemrograman</option>
              <option value="BDI">Basis Data I</option>
              <option value="WEB01">Pemrograman Web</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><b>Nilai UTS</b></td>
            <td><input type="teks" name="nilai_uts" value="" size="10" placeholder="UTS"/></td>
          </tr>
          <tr>
            <td><b>Nilai UAS</b></td>
            <td><input type="teks" name="nilai_uas" value="" size="10" placeholder="UAS"/></td>
          </tr>
          <tr>
            <td><b>Nilai Tugas/Praktikum</b></td>
            <td><input type="teks" name="nilai_tugas" value="" size="10" placeholder="Tugas"/></td>
          </tr>


        </table>

      <input type="submit" class="btn btn-outline-primary" value="Simpan" name="proses" href="array_siswa.php"/>
      <input type="submit" class="btn btn-outline-danger" value="Batal" name="proses"/>
    </form>
    </div>
    <div class="col-md-3">
    </div>
  </div>
</div>

<?php

  $proses= $_GET['proses'];
  $nama_siswa= $_GET['nama'];
  $nim_siswa= $_GET['nim'];
  $mata_kuliah= $_GET['matkul'];
  $nilai_uts= $_GET['nilai_uts'];
  $nilai_uas= $_GET['nilai_uas'];
  $nilai_tugas= $_GET['nilai_tugas'];

echo 'Proses : '.$proses;
echo '<br/>Nama Siswa : '.$nama_siswa;
echo '<br/>Nim : '.$nim_siswa;
echo '<br/>Mata Kuliah : '.$mata_kuliah;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/>Nilai UAS : '.$nilai_uas;
echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;


?>

<nav class="navbar navbar-expand-lg navbar-light btn-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <h6>Develop By Farhan afriansyah TI01</h6>
        </li>
    </div>
  </div>
</nav>

<!--- End Form --->

</body>
</html>