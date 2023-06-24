<?php
    if(!isset($_GET['code_testi'])){
        return;
    }

    $reserve;
    include('config_db.php');
    try{
        $pdo = new PDO($dsn, $db_username, $db_password, $opt); 
        $stmt = $pdo->prepare("DELETE FROM testimoni WHERE code_testi = ?"); 
        $stmt->execute([$_GET['code_testi']]); 
        
        echo "<script> alert('Testimoni Anda berhasil dihapus!');</script>";
        echo '<script>window.location.href = "Testimoni.php";</script>';
    }catch(PDOException $e){
        die($e->getMessage());
    }
?>