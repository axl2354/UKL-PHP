<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<?php
include "header.php";
if($_SESSION['role']=="owner"){
    echo "<script>alert('Kamu tidak punya privilage untuk masuk ke web ini');location.href='home.php';</script>";}
    
elseif($_SESSION['role']=="kasir"){
    echo "<script>alert('Kamu tidak punya privilage untuk masuk ke web ini');location.href='home.php';</script>";}
    ?>
    <?php 
    include "koneksi.php";

    $qry_get_user=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
    $dt_user=mysqli_fetch_array($qry_get_user);
    ?>
    <h3>Ubah Paket</h3>
    <form action="proses_ubah_paket.php" method="post">
    <input type="hidden" name="id_paket" value= "<?=$dt_user['id_paket']?>">
    Jenis :
        <select name="jenis" class="form-control">
            <option></option>
            <option value="kiloan">kiloan</option>
            <option value="selimut">selimut</option>
            <option value="bedcover">bedcover</option>
            <option value="kaos">kaos</option>
        </select>
        Deskripsi : 
        <textarea type="text" name="deskripsi" value="<?=$dt_user['deskripsi']?>" class="form-control" rows="4"></textarea>
        Harga : 
        <input type="text" name="harga" value="<?=$dt_user['harga']?>" class="form-control">
        
        <input type="submit" name="simpan" value="Ubah Paket" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
 
<?php 
    include "footer.php";
?>