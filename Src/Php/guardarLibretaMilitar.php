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

    // Validar campos requeridos
    $requiredFields = ['clase-libreta', 'numero-libreta', 'dm-libreta'];
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
        ':idPersona' => $idPersona,  // idPersona ahora se obtiene de la sesión
        ':clase' => $_POST['clase-libreta'],
        ':numero' => $_POST['numero-libreta'],
        ':distritoMilitar' => $_POST['dm-libreta']
    ]);

    // Respuesta exitosa
    $response['status'] = 'success';
    $response['message'] = 'Datos guardados exitosamente.';
} catch (PDOException $e) {
    // Manejar errores de la base de datos
    $response['status'] = 'error';
    $response['message'] = 'Error al guardar los datos: ' . $e->getMessage();
}

// Enviar la respuesta como JSON
echo json_encode($response);
?>
