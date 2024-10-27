<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    $stmt = $mysqli->prepare("INSERT INTO products (name, description, price, category) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssds', $name, $description, $price, $category);
    $stmt->execute();

    $stmt->close();
    header('Location: catalog.php');
}
?>