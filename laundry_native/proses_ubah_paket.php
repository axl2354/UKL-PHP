<?php
if($_POST){
    $nama_user=$_POST['jenis'];
    $username=$_POST['deskripsi'];
    $password= $_POST['harga'];
    
    if(empty($nama_user)){
        echo "<script>alert('nama jenis tidak boleh kosong');location.href='paket.php';</script>";
 
    } elseif(empty($username)){
        echo "<script>alert('deskripsi tidak boleh kosong');location.href='paket.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('harga tidak boleh kosong');location.href='paket.php';</script>";
    } else {
        
        include "koneksi.php";
            mysqli_query($conn,"UPDATE paket SET id_paket='".$_POST['id_paket']."',jenis='".$_POST['jenis']."',deskripsi='".$_POST['deskripsi']."',harga='".$_POST['harga']."' WHERE id_paket = ".$_POST['id_paket']."");
            echo "<script>location.href='paket.php'</script>";
       
        }
        
        if($insert){
            echo "<script>alert('Sukses menambahkan user');location.href='paket.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan user');location.href='paket.php';</script>";
        }
    }

?>

?>