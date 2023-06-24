<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
     if (!isset($_POST['fname']) || !isset($_POST['uname']) || !isset($_POST['email']) || !isset($_POST['password']) 
         || !isset($_POST['phone']) || !isset($_POST['birth'])) {
         header("Location: ./Sign-Up.php");
     } else {
         include "config_db.php";
         try { 
            $stmt = $pdo->prepare("SELECT * FROM `users` WHERE email = ?"); 
            $stmt -> execute([
                $_POST['email'],
            ]);

            if($stmt -> rowCount() >= 1){
                echo '<script> alert("Email sudah pernah didaftarkan!");</script>';
                echo '<script>window.location.href = "Sign-Up.php";</script>';
            } else{
                $stmt2 = $pdo->prepare("INSERT INTO `users` (`fname`, `uname`, `email`, `password`, `phone`, `birth`, `gender`, `domisili`) VALUES (?, ?, ?, MD5(?), ?, ?, ?, ?)"); 
                $stmt2 -> execute([
                    $_POST['fname'],
                    $_POST['uname'],
                    $_POST['email'],
                    $_POST['password'],
                    $_POST['phone'],
                    $_POST['birth'],
                    $_POST['gender'],
                    $_POST['domisili']
                ]);
                echo '<script> alert("Signup telah berhasil!");</script>';
                echo '<script>window.location.href = "login.php";</script>';
            }
         } catch(PDOException $e){
            echo $e -> getMessage();
         }
      }
    }
