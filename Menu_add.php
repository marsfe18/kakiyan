<?php

try {
    include "config_db.php";
    // Ambil data dari form
    $menu = $_POST['menu'];
    $menutype = $_POST['menutype'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Ambil informasi gambar yang diunggah
    $file = $_FILES['menuphoto'];
    $filename = $file['name'];
    $filetmp = $file['tmp_name'];

    // Pindahkan gambar ke folder image/
    $targetDir = 'Image/';
    $targetFile = $targetDir . $filename;
    move_uploaded_file($filetmp, $targetFile);

    // Query SQL untuk menyimpan data ke dalam tabel menu
    $sql = "INSERT INTO menu (nama, jenis, harga, gambar, deskripsi) VALUES (:nama, :jenis, :harga, :gambar, :deskripsi)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nama', $menu);
    $stmt->bindParam(':jenis', $menutype);
    $stmt->bindParam(':harga', $price);
    $stmt->bindParam(':gambar', $filename);
    $stmt->bindParam(':deskripsi', $description);
    $stmt->execute();

    echo "Data menu telah berhasil ditambahkan!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$pdo = null;
