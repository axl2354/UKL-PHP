<?php 
    include "header.php";
?>
<style>
        div.right {
  position: absolute;
  width: 10%;
  right: 1px;
} 
</style>
<h2>Daftar Paket di Keranjang</h2>

<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th><th>Jenis</th><th>Jumlah</th><th>Total Harga</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
        $harga_akhir=0;
        foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?>
            <?php 
            $harga_akhir=$harga_akhir+$val_produk['harga_produk'];
            
            ?>
            <tr>
                <td><?=($key_produk+1)?></td><td><?=$val_produk['jenis']?></td><td><?=$val_produk['qty']?></td><td><?=$val_produk['harga_produk']?></td><td><a href="hapus_cart.php?id=<?=$key_produk?>" onclick="return confirm('Apakah anda yakin menghapus barang ini dari cart?')" class="btn btn-danger"><strong>X</strong></a></td>
                
            </tr>
            
        <?php endforeach ?>
        <tr>
            <td></td><td></td><td>Harga Akhir =</td><td><?=$harga_akhir?></td><td></td>
        </tr>
    </tbody>
</table>
<div class="right"><a href="checkout.php" class="btn btn-primary">Check Out</a></div>

 
<?php 
    include "footer.php";
?>
