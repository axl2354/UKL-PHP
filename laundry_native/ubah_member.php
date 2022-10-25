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

    $qry_get_user=mysqli_query($conn,"select * from member where id_member = '".$_GET['id_member']."'");
    $dt_user=mysqli_fetch_array($qry_get_user);
    ?>
    <h3>Ubah Member</h3>
    <form action="proses_ubah_member.php" method="post">
    <input type="hidden" name="id_member" value= "<?=$dt_user['id_member']?>">
        Nama user :
        <input type="text" name="nama" value="<?=$dt_user['nama']?>" class="form-control">
        Alamat : 
        <input name="alamat" value="<?=$dt_user['alamat']?>" class="form-control" rows="4"></input>
        Gender : 
        <select name="jk" class="form-control">
            <option></option>
            <option value="l">Laki-laki</option>
            <option value="p">Perempuan</option>
        </select>
        Nomer Telphone :
        <input type="text" name="telp" value="<?=$dt_user['telp']?>" class="form-control">
        
        <input type="submit" name="simpan" value="Ubah Member" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
 
<?php 
    include "footer.php";
?>