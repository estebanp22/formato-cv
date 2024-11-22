<?php
header('Content-Type: application/json');
session_start();

$response = [];

if (!isset($_SESSION["idPersona"])) {
    echo json_encode(["status" => "error", "message" => "No se encontró idPersona en la sesión."]);
    exit;
}

$idPersona = $_SESSION["idPersona"];
include("../Php/BD.php");

if (!$conn) {
    echo json_encode(["status" => "error", "message" => "Error al conectar con la base de datos."]);
    exit;
}

try {
    $stmt = $conn->prepare("SELECT * FROM experiencia_laboral WHERE idPersona = :idPersona AND vigente = 0");
    $stmt->execute([":idPersona" => $idPersona]);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($data) {
        echo json_encode(["status" => "success", "data" => $data]);
    } else {
        echo json_encode(["status" => "error", "message" => "No se encontraron registros."]);
    }
} catch (PDOException $e) {
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
}
?>
