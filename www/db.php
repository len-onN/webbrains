<?php
$host = "db";
$port = 3306;
$username = "root";
$password = "root";
$db = "teste";
try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$db", $username, 
    $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, 
    PDO::ERRMODE_EXCEPTION);
// echo '<h2>Conectado com sucesso.<h2>';
} catch (PDOException $e) {
    echo 'ERROR: ' . $e;
}
?>
