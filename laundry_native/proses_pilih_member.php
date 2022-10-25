
    <?php 
session_start();
    if($_POST){
        include "koneksi.php";
        $_SESSION['member']=$_POST['member']
        ;
    }
    header('location: pilih.php');
?>