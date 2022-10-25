<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
</html>
<?php
include "header.php";
if($_SESSION['role']=="owner"){
    echo "<script>alert('Kamu tidak punya privilage untuk masuk ke web ini');location.href='home.php';</script>";}
    ?>
<html>
<body>
    <h3>Registrasi Pelangang</h3>
    <form action="proses_Registrasi_pelangang.php" method="post">
        Nama user :
        <input type="text" name="nama" value="" class="form-control">
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        Gender : 
        <select name="jk" class="form-control">
            <option></option>
            <option value="l">Laki-laki</option>
            <option value="p">Perempuan</option>
        </select>
        Nomer Telphone :
        <input type="text" name="telp" value="" class="form-control">
        
        <input type="submit" name="simpan" value="Tambah user" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php 
    include "footer.php";
?>