<?php 
include "header.php";
if($_SESSION['role']=="owner"){
    echo "<script>alert('Kamu tidak punya privilage untuk masuk ke web ini');location.href='home.php';</script>";}
    
elseif($_SESSION['role']=="kasir"){
    echo "<script>alert('Kamu tidak punya privilage untuk masuk ke web ini');location.href='home.php';</script>";}
    if($_GET['id_paket']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from paket where id_paket='".$_GET['id_paket']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus paket');location.href='paket.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus paket');location.href='paket.php';</script>";
        }
    }
?>
