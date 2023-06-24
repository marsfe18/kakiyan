<?php
// Mengecek apakah ada permintaan penghapusan yang dikirimkan
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    try {
        include "config_db.php";

        // Menjalankan query DELETE untuk menghapus data berdasarkan ID
        $stmt = $pdo->prepare("DELETE FROM menu WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Mengarahkan kembali ke halaman menu_admin.php setelah penghapusan
        header("Location: menu_admin.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $pdo = null;
}
