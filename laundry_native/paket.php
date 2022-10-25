<?php 
    include "header.php";
?>
<h2>Daftar Paket</h2>
<p align="right">
    <a href="tambah_paket.php" class="btn btn-success" >Tambah Paket</a></p>
    
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_produk=mysqli_query($conn,"select * from paket");
    while($dt_produk=mysqli_fetch_array($qry_produk)){
        ?>
        <div class="col-md-3">
            <div class="card" >
              
              <div class="card-body">
                <h5 class="card-title"><?=$dt_produk['jenis']?></h5>
                <p class="card-text"><?=substr($dt_produk['deskripsi'], 0,20)?></p>
                <p class="card-text"><?=substr($dt_produk['harga'], 0,20)?></p>
                <div class="btn-group" role="group" >
                <a href="ubah_paket.php?id_paket=<?=$dt_produk['id_paket']?>" class="btn btn-primary">Ubah</a>
                <a href="hapus_paket.php?id_paket=<?=$dt_produk['id_paket']?>" class="btn btn-danger">Hapus</a>
    </div>
              </div>
            </div>
        </div>
        <?php
    }
    
    ?>
    
</div>
<?php 
    include "footer.php";
?>
