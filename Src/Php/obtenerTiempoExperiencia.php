<?php
// Configurar encabezado JSON
header('Content-Type: application/json');

// Iniciar sesión
session_start();

$response = [];

// Verificar que el idPersona esté en la sesión
if (!isset($_SESSION["idPersona"])) {
    echo json_encode(["status" => "error", "message" => "No se encontró el idPersona en la sesión."]);
    exit;
}

// Obtener idPersona
$idPersona = $_SESSION["idPersona"];

// Incluir archivo de conexión
include("../Php/BD.php");

// Verificar conexión
if (!$conn) {
    echo json_encode(["status" => "error", "message" => "No se pudo conectar a la base de datos."]);
    exit;
}

try {
    $stmt = $conn->prepare("SELECT * FROM tiempo_experiencia WHERE idPersona = :idPersona");
    $stmt->execute([":idPersona" => $idPersona]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($data) {
        echo json_encode(["status" => "success", "data" => $data]);
    } else {
        echo json_encode(["status" => "error", "message" => "No se encontraron registros."]);
    }
} catch (PDOException $e) {
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
}
?>
