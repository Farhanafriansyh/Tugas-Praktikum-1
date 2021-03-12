<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

<h3>Belanja Online</h3>
<hr/>

<div class="container">
  <div class="row">
    <div class="col-md-8">
    
        <form method="POST" action="form_belanja.php">

            <table>
                <tr>
                    <td><b>Customer</b></td>
                    <td><input type="teks" name="customer" value="" size="25" placeholder="Nama Customer"/></td>
                </tr>
                <tr>
                    <td><b>Pilih Produk</b></td>
                    <td>
                        <input type="radio" name="produk" value="TV"> TV  
                        <input type="radio" name="produk" value="KULKAS"> Kulkas  
                        <input type="radio" name="produk" value="MESIN CUCI"> Mesin Cuci  
                    </td>
                </tr>
                <tr>
                    <td><b>Jumlah</b></td>
                    <td><input type="teks" name="jumlah" value="" size="15" placeholder="Jumlah..."/></td>
                </tr>
            </table>

            <input type="submit" class="btn btn-outline-success" value="Simpan" name="proses"/>

        </form>

    </div>

    <div class="col-md-4">
        <ul class="list-group">
            <li class="list-group-item active" aria-current="true">Daftar Harga</li>
            <li class="list-group-item">TV : 4.200.000</li>
            <li class="list-group-item">Kulkas : 3.100.000</li>
            <li class="list-group-item">Mesin Cuci : 3.800.000</li>
            <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
        </ul>
    </div>


  </div>
</div>
<hr/>

<?php

    $customer = $_POST ['customer'];
    $produk = $_POST ['produk'];
    $jumlah = $_POST ['jumlah'];

echo '<br/>Nama Customer : '.$customer;
echo '<br/>Produk Pilihan : '.$produk;
echo '<br/>Jumlah Beli : '.$jumlah;
if($produk == "TV"){
    echo "<br/>Harga : ". 4200000 * $jumlah;
}
else if($produk == "KULKAS"){
    echo "<br/>Harga : ". 3100000 * $jumlah;
}
else{
    "<br/>Harga : ". 3800000 * $jumlah;
}

?>

</body>
</html>