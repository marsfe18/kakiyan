<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
     if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['resto']) 
         || !isset($_POST['order']) || !isset($_POST['subject']) || !isset($_POST['review'])) {
         header("Location: ./FormTestimoni.php");
     } else {
         include('config_db.php');
         try { 
            $code = rand(1000,9999);
            $pdo = new PDO($dsn,$db_username,$db_password,$opt); 
            $stmt = $pdo->prepare("INSERT INTO `testimoni` (`code_testi`, `nama`, `email`, `branch_store`, `tipe_booking`, `subject`, `review`) VALUES (?, ?, ?, ?, ?, ?, ?)"); 
            $stmt -> execute([
                $_POST['testi'],
                $_POST['name'],
                $_POST['email'],
                $_POST['resto'],
                $_POST['order'],
                $_POST['subject'],
                $_POST['review']
            ]);
            echo "<script> alert('Testimoni yang Anda lakukan berhasil!');</script>";
            echo '<script>window.location.href = "Testimoni.php";</script>';
         } catch(PDOException $e){
            echo $e -> getMessage();
         }
      }
    }
?>