<?php 
    include "header.php";
?>
<h2>Daftar Paket</h2>
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
                <a href="beli_paket.php?id_paket=<?=$dt_produk['id_paket']?>" class="btn btn-primary">Beli</a>
              </div>
            </div>
        </div>
        <?php
    }
  
    include "footer.php";
        ?>
    
</div>
<?php 
    include "footer.php";
?>