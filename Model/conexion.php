<?php
include 'config.php';
// https://diego.com.es/tutorial-de-pdo

// Conectarnos a la BBDD
try {
    $dsn = "mysql:host=".SERVIDOR.";dbname=".BD;
    $pdo = new PDO($dsn, USER, PASSWORD); // Cuando queramos hacer conexión, usamos $pdo
    echo "<script>alert('Conexión establecida')</script>";
} catch (PDOException $e){
    echo $e->getMessage();
}
?>