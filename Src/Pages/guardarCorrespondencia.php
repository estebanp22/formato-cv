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

    // Validar campos requeridos
    $requiredFields = [
        'direccion-correspondencia', 'pais-correspondencia', 'departamento-correspondencia',
        'municipio-correspondencia', 'telefono', 'email'
    ];
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

    $sql = "INSERT INTO direccion_correspondencia (
                idPersona, direccion, pais, departamento, municipio, telefono, email
            ) VALUES (
                :idPersona, :direccion, :pais, :departamento, :municipio, :telefono, :email
            )";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        ':idPersona' => $idPersona,  // idPersona obtenido de la sesión
        ':direccion' => $_POST['direccion-correspondencia'],
        ':pais' => $_POST['pais-correspondencia'],
        ':departamento' => $_POST['departamento-correspondencia'],
        ':municipio' => $_POST['municipio-correspondencia'],
        ':telefono' => $_POST['telefono'],
        ':email' => $_POST['email']
    ]);

    // Respuesta exitosa
    $response['status'] = 'success';
    $response['message'] = 'Datos de dirección guardados exitosamente.';
} catch (PDOException $e) {
    $response['status'] = 'error';
    $response['message'] = 'Error al guardar los datos: ' . $e->getMessage();
}

// Enviar la respuesta como JSON
echo json_encode($response);
?>
