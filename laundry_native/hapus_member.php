<?php 
include "header.php";
if($_SESSION['role']=="owner"){
    echo "<script>alert('Kamu tidak punya privilage untuk masuk ke web ini');location.href='home.php';</script>";}
    
elseif($_SESSION['role']=="kasir"){
    echo "<script>alert('Kamu tidak punya privilage untuk masuk ke web ini');location.href='home.php';</script>";}
    if($_GET['id_member']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from member where id_member='".$_GET['id_member']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus member');location.href='member.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus member');location.href='member.php';</script>";
        }
    }
?>
