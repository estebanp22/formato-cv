<?php
// Configuración de la base de datos
$host = "localhost";
$dbname = "hojadevida";
$username = "root";
$password = "";
//$password = "Esteban.22";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}
?>
