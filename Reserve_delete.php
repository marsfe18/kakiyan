<?php
    if(!isset($_GET['booking_code'])){
        return;
    }

    $reserve;
    include('config_db.php');
    try{
        $pdo = new PDO($dsn, $db_username, $db_password, $opt); 
        $stmt = $pdo->prepare("DELETE FROM reserve WHERE booking_code = ?"); 
        $stmt->execute([$_GET['booking_code']]); 
        
        echo "<script> alert('Data Anda berhasil dihapus!');</script>";
        echo '<script>window.location.href = "Reserve_Manage.php";</script>';
    }catch(PDOException $e){
        die($e->getMessage());
    }
?>