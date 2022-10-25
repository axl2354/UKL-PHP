<?php

include "koneksi.php";
$qry_get_transaksi=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$_GET['id_transaksi']."'");
$dt_transaksi=mysqli_fetch_array($qry_get_transaksi);

mysqli_query($conn,"update transaksi set status_order = 'diambil' where id_transaksi = '".$dt_transaksi['id_transaksi']."'");
echo '<script>location.href="histori_pembelian.php"</script>';
?>