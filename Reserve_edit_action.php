<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
     if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['date']) || !isset($_POST['resto']) 
         || !isset($_POST['time']) || !isset($_POST['person'])) {
         header("Location: ./FormReserve.php");
     } else {
         include('config_db.php');
         try { 
            $pdo = new PDO($dsn,$db_username,$db_password,$opt); 
            $stmt = $pdo->prepare("UPDATE reserve SET slot_time = ?, branch_store = ?, area = ?, message = ?, person = ?, date_book = ? WHERE booking_code = ?"); 
            $stmt -> execute([
                $_POST['time'],
                $_POST['resto'],
                $_POST['view'],
                $_POST['catatan'],
                $_POST['person'],
                $_POST['date'],
                $_POST['book']
            ]);
            echo "<script> alert('Data Anda berhasil diperbaharui!');</script>";
            echo '<script>window.location.href = "Reserve_Manage.php";</script>';
         } catch(PDOException $e){
            echo $e -> getMessage();
         }
      }
    }
?>