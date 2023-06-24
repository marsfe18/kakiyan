<?php

try {
    include "config_db.php";
    $offer = $_POST['offer'];
    $discount = $_POST['discount'];
    $description_off = $_POST['description_off'];
    $item = $_POST['item'];
    $ogprice = $_POST['ogprice'];
    $saveprice = $_POST['saveprice'];
    $file = $_FILES['photooffer'];
    $filename = $file['name'];
    $filetmp = $file['tmp_name'];
    $targetDir = 'image/';
    $targetFile = $targetDir . $filename;
    move_uploaded_file($filetmp, $targetFile);
    $sql = "INSERT INTO offer (nama, asli, diskon, deskripsi, deskripsi2, hemat, gambar) VALUES (:nama, :asli, :diskon, :deskripsi, :deskripsi2, :hemat, :gambar)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nama', $offer);
    $stmt->bindParam(':asli', $ogprice);
    $stmt->bindParam(':diskon', $discount);
    $stmt->bindParam(':deskripsi', $description_off);
    $stmt->bindParam(':deskripsi2', $item);
    $stmt->bindParam(':hemat', $saveprice);
    $stmt->bindParam(':gambar', $filename);
    $stmt->execute();

    echo "Data offer telah berhasil ditambahkan!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$pdo = null;
