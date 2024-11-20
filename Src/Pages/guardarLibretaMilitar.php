<?php
header('Content-Type: application/json');

session_start();

$response = [];

// Verificar que el idPersona esté en la sesión
if (!isset($_SESSION["idPersona"])) {
    $response['status'] = 'error';
    $response['message'] = 'No se encontró el idPersona en la sesión.';
    echo json_encode($response);
    exit;
}

// Obtener idPersona desde la sesión
$idPersona = $_SESSION["idPersona"];

include("../Php/BD.php");

// Verificar conexión
if (!$conn) {
    $response['status'] = 'error';
    $response['message'] = 'No se pudo conectar a la base de datos.';
    echo json_encode($response);
    exit;
}

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Validar campos requeridos
    $requiredFields = ['clase-libreta', 'numero', 'distritoMilitar'];
    $missingFields = [];

    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            $missingFields[] = $field;
        }
    }

    if (!empty($missingFields)) {
        $response['status'] = 'error';
        $response['message'] = 'Faltan los siguientes campos: ' . implode(', ', $missingFields);
        echo json_encode($response);
        exit;
    }

    // Preparar consulta SQL
    $sql = "INSERT INTO libreta_militar (
                idPersona, clase, numero, distritoMilitar
            ) VALUES (
                :idPersona, :clase, :numero, :distritoMilitar
            )";

    $stmt = $conn->prepare($sql);

    // Ejecutar consulta
    $stmt->execute([
        ':idPersona' => $idPersona,
        ':clase' => $_POST['clase-libreta'],
        ':numero' => $_POST['numero'],
        ':distritoMilitar' => $_POST['distritoMilitar']
    ]);

    // Respuesta exitosa
    $response['status'] = 'success';
    $response['message'] = 'Datos guardados exitosamente.';
} catch (PDOException $e) {
    $response['status'] = 'error';
    $response['message'] = 'Error al guardar los datos: ' . $e->getMessage();
}

// Enviar respuesta
echo json_encode($response);
