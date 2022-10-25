<?php 
    session_start();
    include "koneksi.php";
    $cart=@$_SESSION['cart'];
    print_r($_SESSION['cart']);
    if(count($cart)>0){
        $lama_pinjam=7; //satuan hari
        $tgl_harus_kembali=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$lama_pinjam),date('Y')));
        mysqli_query($conn,"insert into transaksi (id_member, id_user, tgl_transaksi, batas_waktu) value('".$_SESSION['member']."','".$_SESSION['id_user']."','".date('Y-m-d')."','".$tgl_harus_kembali."')");
        
        $id=mysqli_insert_id($conn);
        foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($conn,"insert into detail_transaksi (id_transaksi,id_paket,qty) value('".$id."','".$val_produk['id_paket']."','".$val_produk['qty']."')");
        
        }
        unset($_SESSION['cart']);
        echo '<script>alert("Anda berhasil membeli produk");location.href="histori_pembelian.php"</script>';
    }
?>
