<?php

try {
    include "config_db.php";
    // Ambil id menu dari form
    $menuId = $_GET['id'];

    // Hapus data menu berdasarkan id
    $query = "DELETE FROM offer WHERE id = :menuId";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':menuId', $menuId);
    $stmt->execute();

    // Redirect ke halaman menu_admin.php
    header("Location: offer_admin.php");
    // echo $menuId;
    exit();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
