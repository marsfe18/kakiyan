<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['resto']) 
        || !isset($_POST['order']) || !isset($_POST['subject']) || !isset($_POST['review'])) {
        header("Location: ./FormTestimoni.php");
     } else {
         include('config_db.php');
         try { 
            $pdo = new PDO($dsn,$db_username,$db_password,$opt); 
            $stmt = $pdo->prepare("UPDATE testimoni SET nama = ?, email = ?, branch_store = ?, tipe_booking = ?, subject = ?, review = ? WHERE code_testi = ?"); 
            $stmt -> execute([
                $_POST['name'],
                $_POST['email'],
                $_POST['resto'],
                $_POST['order'],
                $_POST['subject'],
                $_POST['review'],
                $_POST['testi']
            ]);
            echo "<script> alert('Data Anda berhasil diperbaharui!');</script>";
            echo '<script>window.location.href = "Testimoni.php";</script>';
         } catch(PDOException $e){
            echo $e -> getMessage();
         }
      }
    }
?>