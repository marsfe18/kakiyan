<?php
// Mengambil data dari form
$menuId = $_POST['menuId'];
$editNama = $_POST['editNama'];
$editJenis = $_POST['editJenis'];
$editHarga = $_POST['editHarga'];
$editDeskripsi = $_POST['editDeskripsi'];

try {
    include "config_db.php";


    if ($_FILES['editGambar']['name']) {
        $gambarPath = 'image/';
        $gambarNama = $_FILES['editGambar']['name'];
        $gambarTmp = $_FILES['editGambar']['tmp_name'];


        move_uploaded_file($gambarTmp, $gambarPath . $gambarNama);


        $sql = "UPDATE menu SET nama=:nama, jenis=:jenis, harga=:harga, deskripsi=:deskripsi, gambar=:gambar WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':gambar', $gambarNama);
    } else {

        $sql = "UPDATE menu SET nama=:nama, jenis=:jenis, harga=:harga, deskripsi=:deskripsi WHERE id=:id";
        $stmt = $pdo->prepare($sql);
    }

    $stmt->bindParam(':nama', $editNama);
    $stmt->bindParam(':jenis', $editJenis);
    $stmt->bindParam(':harga', $editHarga);
    $stmt->bindParam(':deskripsi', $editDeskripsi);
    $stmt->bindParam(':id', $menuId);
    $stmt->execute();


    header("Location: menu_admin.php");
    echo "berhasil";
    exit();
} catch (PDOException $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}

$pdo = null;
