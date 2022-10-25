<?php 
session_start();
    if($_POST){
        include "koneksi.php";
        
        $qry_get_produk=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
        $dt_produk=mysqli_fetch_array($qry_get_produk);
        $_SESSION['cart'][]=array(
            'id_paket'=>$dt_produk['id_paket'],
            'jenis'=>$dt_produk['jenis'],
            'harga_produk'=>$dt_produk['harga']*$_POST['jumlah_beli'],
            'qty'=>$_POST['jumlah_beli']
        );
    }
    header('location: pilih.php');
?>
 
