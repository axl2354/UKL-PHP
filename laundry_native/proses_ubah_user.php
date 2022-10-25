<?php
if($_POST){
    $nama_user=$_POST['nama'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    
    if(empty($nama_user)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='tampil_user.php';</script>";
 
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tampil_user.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tampil_user.php';</script>";
    } else {
        
        include "koneksi.php";
        if($_POST['role']==0){
            mysqli_query($conn,"UPDATE user SET id_user='".$_POST['id_user']."',nama='".$_POST['nama']."',username='".$_POST['username']."',password='".md5($_POST['password'])."',role='admin' WHERE id_user = ".$_POST['id_user']."");
            echo "<script>location.href='tampil_user.php'</script>";
        }else{
            mysqli_query($conn,"UPDATE user SET id_user='".$_POST['id_user']."',nama='".$_POST['nama']."',username='".$_POST['username']."',password='".md5($_POST['password'])."',role='kasir' WHERE id_user = ".$_POST['id_user']."");
            echo "<script>location.href='tampil_user.php'</script>";
        }
        
        if($insert){
            echo "<script>alert('Sukses menambahkan user');location.href='tampil_user.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan user');location.href='tampil_user.php';</script>";
        }
    }
}
?>

?>