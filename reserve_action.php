<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
     if (!isset($_POST['book']) || !isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['date']) || !isset($_POST['resto']) 
         || !isset($_POST['time']) || !isset($_POST['person'])) {
         header("Location: ./FormReserve.php");
     } else {
         include('config_db.php');
         try { 
            $pdo = new PDO($dsn,$db_username,$db_password,$opt); 
            $stmt = $pdo->prepare("INSERT INTO `reserve` (`booking_code`, `slot_time`, `branch_store`, `nama`, `email`, `area`, `message`, `person`, `date_book`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"); 
            $stmt -> execute([
                $_POST['book'],
                $_POST['time'],
                $_POST['resto'],
                $_POST['name'],
                $_POST['email'],
                $_POST['view'],
                $_POST['catatan'],
                $_POST['person'],
                $_POST['date']
            ]);
            echo "<script> alert('Reservasi yang Anda lakukan berhasil!');</script>";
            echo '<script>window.location.href = "Reserve.php";</script>';
         } catch(PDOException $e){
            echo $e -> getMessage();
         }
      }
    }
?>