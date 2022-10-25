<?php 
    include "header.php";
?>
<h2>Pilih Member</h2>
    <td>
    <form action="proses_pilih_member.php" method="post">
        <select name="member" class="form-control">
            <option></option>
                <?php
                include "koneksi.php";
                $qry_kelas=mysqli_query($conn,"select * from member");
                while($data_kelas=mysqli_fetch_array($qry_kelas)){
                    echo '<option value="'.$data_kelas['id_member'].'">'.$data_kelas['nama'].'</option>';    
                }
                ?>
        </select>
        <input type="submit" name="simpan" value="Confirm" class="btn btn-primary">
    </form>
    </td>
    <?php 
    include "footer.php";
?>
