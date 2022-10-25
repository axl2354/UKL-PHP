<?php 
    include "header.php";
?>
<h2>Histori Pembelian</h2>
<table class="table table-hover table-striped">
    <thead>
        <th>NO</th><th>Tanggal Beli</th><th>Nama Member</th><th>Nama Paket</th><th>QTY</th><th>Batas Waktu</th><th>Tanggal Bayar</th><th>Status Bayar</th><th>Status Order</th>
    </thead>
    <tbody>
        <?php 
        include "koneksi.php";
        $qry_histori=mysqli_query($conn,"select * from transaksi t join member m on t.id_member=m.id_member order by id_transaksi desc");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            //menampilkan buku yang dipinjam
            $produk_dibeli="<ol>";
            $qty="<ol>";
            $qry_produk=mysqli_query($conn,"select * from  detail_transaksi join paket on paket.id_paket=detail_transaksi.id_paket where id_transaksi = '".$dt_histori['id_transaksi']."'");
            while($dt_produk=mysqli_fetch_array($qry_produk)){
                $produk_dibeli.="<li>".$dt_produk['jenis']."</li>";
                $qty.="<li>".$dt_produk['qty']."</li>";
            }
            $produk_dibeli.="</ol>";
            $qty.="</ol>";
            
            
            $qry_cek_kembali=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$dt_histori['id_transaksi']."'");
        ?>
            <tr>
                <td><?=$no?></td><td><?=$dt_histori['tgl_transaksi']?></td><td><?=$dt_histori['nama']?></td><td><?=$produk_dibeli?></td><td><?=$qty?></td><td><?=$dt_histori['batas_waktu']?></td><td><?=$dt_histori['tgl_bayar']?></td>
                <?php
                if($dt_histori['status_bayar']=="belum_lunas"){
                    ?>
                    <td><a href="ubah_Status.php?id_transaksi=<?=$dt_histori['id_transaksi']?>" class="btn btn-primary">Bayar</a>
                    <?php
                }else{
                    ?>
                    <td><a class="btn btn-secondary">Lunas</a></td>
                    <?php
                }
                ?>
                <?php
                if($dt_histori['status_order']=="baru"){
                    ?>
                    <td><a href="diproses.php?id_transaksi=<?=$dt_histori['id_transaksi']?>" class="btn btn-primary">Baru</a></td>
                    <?php
                }elseif($dt_histori['status_order']=="diproses"){
                    ?>
                    <td><a href="selesai.php?id_transaksi=<?=$dt_histori['id_transaksi']?>" class="btn btn-warning">Diproses</a></td>
                    <?php
                }elseif($dt_histori['status_order']=="selesai"){
                    ?>
                    <td><a href="diambil.php?id_transaksi=<?=$dt_histori['id_transaksi']?>" class="btn btn-success">Selesai</a></td>
                    <?php
                }else{
                    ?>
                    <td><a class="btn btn-secondary">Diambil</a></td>
                    <?php
                };
                ?>
            </tr>

            
        <?php
        }
        ?>
    </tbody>
</table>
<?php 
    include "footer.php";
?>
