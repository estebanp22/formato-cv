<?php
// Configurar encabezado JSON
header('Content-Type: application/json');

// Iniciar sesión
session_start();

// Inicializar respuesta
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

// Configuración de errores
ini_set('log_errors', 1);
ini_set('error_log', '/ruta/a/tu/log/php_errors.log');
ini_set('display_errors', 0);

// Incluir el archivo de conexión a la base de datos
include("../Php/BD.php");

// Verificar conexión a la base de datos
if (!$conn) {
    $response['status'] = 'error';
    $response['message'] = 'No se pudo conectar a la base de datos.';
    echo json_encode($response);
    exit;
}

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consultar datos de la libreta militar
    $sql = "SELECT clase, numero, distritoMilitar
            FROM libreta_militar WHERE idPersona = :idPersona";

    $stmt = $conn->prepare($sql);
    $stmt->execute([':idPersona' => $idPersona]);

    $libreta = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($libreta) {
        $response['status'] = 'success';
        $response['data'] = $libreta;
    } else {
        $response['status'] = 'error';
        $response['message'] = 'No se encontraron datos para la libreta militar.';
    }
} catch (PDOException $e) {
    $response['status'] = 'error';
    $response['message'] = 'Error al consultar los datos: ' . $e->getMessage();
}

// Enviar respuesta como JSON
echo json_encode($response);
?>
