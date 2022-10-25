<?php

include "koneksi.php";
$qry_get_transaksi=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$_GET['id_transaksi']."'");
$dt_transaksi=mysqli_fetch_array($qry_get_transaksi);

mysqli_query($conn,"update transaksi set tgl_bayar=('".date('Y-m-d')."'), status_bayar = 'lunas' where id_transaksi = '".$dt_transaksi['id_transaksi']."'");
echo '<script>alert("Anda berhasil menganti status");location.href="histori_pembelian.php"</script>';
?>