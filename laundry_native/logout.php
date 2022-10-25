<?php
    unset($_SESSION['role']);
    unset($_SESSION['id_user']);
    unset($_SESSION['nama']);
    $_SESSION['status_login']=false;
    header("location: login.php");
?>