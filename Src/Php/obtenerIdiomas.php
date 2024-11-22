<?php
// Configuración de encabezados y sesión
header('Content-Type: application/json');
session_start();
$response = [];

// Verificar si el idPersona está en sesión
if (!isset($_SESSION["idPersona"])) {
    $response['status'] = 'error';
    $response['message'] = 'No se encontró idPersona en la sesión.';
    echo json_encode($response);
    exit;
}

$idPersona = $_SESSION["idPersona"];

// Incluir archivo de conexión a la base de datos
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

    // Consultar los idiomas asociados al idPersona
    $sql = "SELECT idioma, habla, lee, escribe
            FROM idioma
            WHERE idPersona = :idPersona";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':idPersona' => $idPersona]);

    $idiomas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($idiomas) {
        $response['status'] = 'success';
        $response['data'] = $idiomas;
    } else {
        $response['status'] = 'error';
        $response['message'] = 'No se encontraron idiomas para esta persona.';
    }
} catch (PDOException $e) {
    $response['status'] = 'error';
    $response['message'] = 'Error al consultar los datos: ' . $e->getMessage();
}

echo json_encode($response);
?>
