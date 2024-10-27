<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'catalog';

$mysqli = new mysqli($host, $user, $password, $dbname);

if ($mysqli->connect_error) {
    die("Ошибка подключения: " . $mysqli->connect_error);
}
?>