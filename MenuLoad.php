<?php

try {
    include "config_db.php";

    $query = "SELECT id, nama, jenis, harga, gambar, deskripsi FROM menu";
    $stmt = $pdo->query($query);
    $menuData = $stmt->fetchAll();

    header('Content-Type: application/json');
    echo json_encode($menuData);
} catch (PDOException $th) {
    $th->getMessage();
}
