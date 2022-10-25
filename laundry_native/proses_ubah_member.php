<?php
if($_POST){
    $nama_user=$_POST['id_member'];
    $username=$_POST['nama'];
    $password= $_POST['alamat'];
    
    if(empty($nama_user)){
        echo "<script>alert('nama jenis tidak boleh kosong');location.href='member.php';</script>";
 
    } elseif(empty($username)){
        echo "<script>alert('deskripsi tidak boleh kosong');location.href='member.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('harga tidak boleh kosong');location.href='member.php';</script>";
    } else {
        
        include "koneksi.php";
            mysqli_query($conn,"UPDATE member SET id_member='".$_POST['id_member']."',nama='".$_POST['nama']."',alamat='".$_POST['alamat']."',jk='".$_POST['jk']."',telp='".$_POST['telp']."' WHERE id_member = ".$_POST['id_member']."");
            echo "<script>location.href='member.php'</script>";
       
        }
        
        if($insert){
            echo "<script>alert('Sukses mengubah member');location.href='member.php';</script>";
        } else {
            echo "<script>alert('Gagal mengubah member');location.href='member.php';</script>";
        }
    }

?>

?>