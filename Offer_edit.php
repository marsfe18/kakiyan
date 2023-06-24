<?php

try {
    include "config_db.php";
    // Ambil data dari form
    $menuId = $_POST['menuId'];
    $editNama = $_POST['editNama'];
    $editHargaAsli = $_POST['editHargaAsli'];
    $editHargaDiskon = $_POST['editHargaDiskon'];
    $editDeskripsi = $_POST['editDeskripsi'];
    $editDeskripsi2 = $_POST['editDeskripsi2'];

    // Proses upload gambar jika ada
    if ($_FILES['editGambar']['name'] != '') {
        $targetDir = "image/";
        $filename = basename($_FILES["editGambar"]["name"]);
        $targetFile = $targetDir . $filename;
        move_uploaded_file($_FILES["editGambar"]["tmp_name"], $targetFile);

        // Update data menu dengan gambar
        $query = "UPDATE offer SET nama = :nama, asli = :asli, diskon = :diskon, deskripsi = :deskripsi, deskripsi2 = :deskripsi2, gambar = :gambar WHERE id = :menuId";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nama', $editNama);
        $stmt->bindParam(':asli', $editHargaAsli);
        $stmt->bindParam(':diskon', $editHargaDiskon);
        $stmt->bindParam(':deskripsi', $editDeskripsi);
        $stmt->bindParam(':deskripsi2', $editDeskripsi2);
        $stmt->bindParam(':gambar', $filename);
        $stmt->bindParam(':menuId', $menuId);
        $stmt->execute();
    } else {
        // Update data menu tanpa gambar
        $query = "UPDATE offer SET nama = :nama, asli = :asli, diskon = :diskon, deskripsi = :deskripsi, deskripsi2 = :deskripsi2 WHERE id = :menuId";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nama', $editNama);
        $stmt->bindParam(':asli', $editHargaAsli);
        $stmt->bindParam(':diskon', $editHargaDiskon);
        $stmt->bindParam(':deskripsi', $editDeskripsi);
        $stmt->bindParam(':deskripsi2', $editDeskripsi2);
        $stmt->bindParam(':menuId', $menuId);
        $stmt->execute();
    }

    // Redirect ke halaman menu_admin.php
    // header("Location: menu_admin.php");
    echo "test";
    exit();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
