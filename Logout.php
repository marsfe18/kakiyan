<?php
    session_start();
    echo '<script> alert("Apakah Anda yakin ingin keluar?");</script>';
    session_unset();
    session_destroy();
    echo '<script>window.location.href = "Login.php";</script>';
    exit();
?>