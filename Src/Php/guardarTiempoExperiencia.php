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
    $requiredFields = ['meses-servidor-publico', 'meses-servidor-privado', 'meses-independiente'];
    $missingFields = [];

    foreach ($requiredFields as $field) {
        if (!isset($_POST[$field]) || $_POST[$field] === '') {
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
    $sql = "INSERT INTO tiempo_experiencia (
                idPersona, mesesSectorPublico, mesesSectorPrivado, MesesIndependiente
            ) VALUES (
                :idPersona, :mesesSectorPublico, :mesesSectorPrivado, :MesesIndependiente
            )";

    $stmt = $conn->prepare($sql);

    // Ejecutar consulta
    $stmt->execute([
        ':idPersona' => $idPersona,
        ':mesesSectorPublico' => $_POST['meses-servidor-publico'],
        ':mesesSectorPrivado' => $_POST['meses-servidor-privado'],
        ':MesesIndependiente' => $_POST['meses-independiente']
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
