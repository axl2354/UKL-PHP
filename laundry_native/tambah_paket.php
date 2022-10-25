<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<?php 
    include "header.php";
?>
<?php
if($_SESSION['role']=="owner"){
    echo "<script>alert('Kamu tidak punya privilage untuk masuk ke web ini');location.href='paket.php';</script>";}
    
elseif($_SESSION['role']=="kasir"){
    echo "<script>alert('Kamu tidak punya privilage untuk masuk ke web ini');location.href='paket.php';</script>";}
    ?>
<body>
    <h3>Tambah Paket</h3>
    <form action="proses_tambah_paket.php" method="post">
    Jenis :
        <select name="jenis" class="form-control">
            <option></option>
            <option value="kiloan">kiloan</option>
            <option value="selimut">selimut</option>
            <option value="bedcover">bedcover</option>
            <option value="kaos">kaos</option>
        </select>
        Deskripsi : 
        <textarea type="text" name="deskripsi" value="" class="form-control" rows="4"></textarea>
        Harga : 
        <input type="text" name="harga" value="" class="form-control">
        
        <input type="submit" name="simpan" value="Tambah paket" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php 
    include "footer.php";
?>