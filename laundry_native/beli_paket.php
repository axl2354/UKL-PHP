<?php 
    include "header.php";
    include "koneksi.php";
    if($_SESSION['role']=="owner"){
        echo "<script>alert('Kamu tidak punya privilage untuk masuk ke web ini');location.href='home.php';</script>";}
        
    $qry_detail_produk=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
    $dt_produk=mysqli_fetch_array($qry_detail_produk);
?>
<h2>Beli</h2>
<div class="row">
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_paket=<?=$dt_produk['id_paket']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Jenis Produk</td><td><?=$dt_produk['jenis']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td><td><?=$dt_produk['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td><td><input type="number" name="jumlah_beli" value="1"></td>
                    </tr>
                    <tr>
                    
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="BELI"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php 
    include "footer.php";
?>
 
