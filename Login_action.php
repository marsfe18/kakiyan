<?php
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    try {
        include "config_db.php";
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? AND password = MD5(?)");
        $stmt->bindValue(1, $_POST['email']);
        $stmt->bindValue(2, $_POST['password']);
        $stmt->execute();

        if ($stmt->rowCount() >= 1) {
            // berhasil login
            session_start();
            $_SESSION['email'] = $_POST['email'];
            header("Location: index.php");
        } else {
            echo '<script> alert("Username atau password tidak boleh salah!");</script>';
            echo '<script>window.location.href = "Login.php";</script>';
        }
    } catch (PDOException $e) {
        $e->getMessage();
    }
} else {
    echo "<script> alert('Username atau password tidak boleh kosong!')</script>";
}
