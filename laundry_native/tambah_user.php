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
    echo "<script>alert('Kamu tidak punya privilage untuk masuk ke web ini');location.href='home.php';</script>";}
    
elseif($_SESSION['role']=="kasir"){
    echo "<script>alert('Kamu tidak punya privilage untuk masuk ke web ini');location.href='home.php';</script>";}
    ?>
<body>
    
    <h3>Registrasi User</h3>
    <form action="proses_tambah_user.php" method="post">
        Nama user :
        <input type="text" name="nama" value="" class="form-control">
        
        Username : 
        <input type="text" name="username" value="" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        Role :
        <select name="role" class="form-control">
            <option></option>
            <option value="admin">admin</option>
            <option value="kasir">kasir</option>
        </select>
        <input type="submit" name="simpan" value="Tambah user" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php 
    include "footer.php";
?>