<?php

try {
    include "config_db.php";

    $query = "SELECT * FROM offer";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $offers = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($offers);
} catch (PDOException $th) {
    $th->getMessage();
}
