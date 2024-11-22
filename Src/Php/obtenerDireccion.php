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

ini_set('log_errors', 1);
ini_set('error_log', '/ruta/a/tu/log/php_errors.log');
ini_set('display_errors', 0);

include("../Php/BD.php");

if (!$conn) {
    $response['status'] = 'error';
    $response['message'] = 'No se pudo conectar a la base de datos.';
    echo json_encode($response);
    exit;
}

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consultar datos de la dirección de correspondencia
    $sql = "SELECT direccion, pais, departamento, municipio, telefono, email
            FROM direccion_correspondencia WHERE idPersona = :idPersona";

    $stmt = $conn->prepare($sql);
    $stmt->execute([':idPersona' => $idPersona]);

    $direccion = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($direccion) {
        $response['status'] = 'success';
        $response['data'] = $direccion;
    } else {
        $response['status'] = 'error';
        $response['message'] = 'No se encontraron datos de dirección para esta persona.';
    }
} catch (PDOException $e) {
    $response['status'] = 'error';
    $response['message'] = 'Error al consultar los datos: ' . $e->getMessage();
}

// Enviar la respuesta como JSON
echo json_encode($response);
?>
