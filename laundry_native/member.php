<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<?php 
    include "header.php";
?>
<?php
if($_SESSION['role']=="owner"){
    echo "<script>alert('Kamu tidak punya privilage untuk masuk ke web ini');location.href='home.php';</script>";}
    
else{}
    ?>

<body>
    <h3>Tampil Member</h3>
    <p align="right">
    <a href="registrasi_pelangang.php" class="btn btn-success" >Tambah Member</a></p>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
    <th>NO</th>
    <th>NAMA</th>
    <th>Alamat</th>
    <th>KELAMIN</th>
    <th>NO TELEPHONE</th>
    <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
$qry_member=mysqli_query($conn,"select * from member ");
            $no=0;
            while($data_member=mysqli_fetch_array($qry_member)){
            $no++;?>
            <tr>              
                <td><?=$no?></td><td><?=$data_member['nama']?></td> <td><?=$data_member['alamat']?></td><td><?=$data_member['jk']?></td><td><?=$data_member['telp']?></td></td> <td>
                <div class="btn-group" role="group" >
                    <a href="ubah_member.php?id_member=<?=$data_member['id_member']?>" class="btn btn-success">Ubah</a>
                    <a href="hapus_member.php?id_member=<?=$data_member['id_member']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                </div>
 
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
<?php 
    include "footer.php";
?>