<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("DELETE FROM restaurants WHERE babershop_id = ?");
    $stmt->execute([$id]);

    header('Location: index.php');
    exit;
}
?>