<?php
// Configurar encabezado JSON
header('Content-Type: application/json');

ini_set('log_errors', 1);
ini_set('error_log', '/ruta/a/tu/log/php_errors.log');
ini_set('display_errors', 0);

include("../Php/BD.php");

session_start();

// Obtener idPersona desde la sesión
$idPersona = $_SESSION["idPersona"];

// Inicializar respuesta
$response = [];

// Verificar conexión a la base de datos
if (!$conn) {
    $response['status'] = 'error';
    $response['message'] = 'No se pudo conectar a la base de datos.';
    echo json_encode($response);
    exit;
}

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Validar que todos los campos requeridos están presentes
    $requiredFields = [
        'primerApellido', 'segundoApellido', 'nombres',
        'tipoDocumento', 'genero',
        'fechaNacimiento', 'paisNacimiento',
        'departamentoNacimiento', 'municipioNacimiento'
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

    // Preparar consulta SQL
    $sql = "INSERT INTO persona (
                primerApellido, segundoApellido, nombres,
                tipoDocumento, idPersona, genero,
                fechaNacimiento, paisNacimiento, departamentoNacimiento,
                municipioNacimiento
            ) VALUES (
                :primerApellido, :segundoApellido, :nombres,
                :tipoDocumento, :numeroDocumento, :genero,
                :fechaNacimiento, :paisNacimiento,
                :departamentoNacimiento, :municipioNacimiento
            )";

    $stmt = $conn->prepare($sql);

    // Ejecutar consulta con los datos del formulario
    $stmt->execute([
        ':primerApellido' => $_POST['primerApellido'],
        ':segundoApellido' => $_POST['segundoApellido'],
        ':nombres' => $_POST['nombres'],
        ':tipoDocumento' => $_POST['tipoDocumento'],
':numeroDocumento' => $idPersona,
        ':genero' => $_POST['genero'],
        ':fechaNacimiento' => $_POST['fechaNacimiento'],
        ':paisNacimiento' => $_POST['paisNacimiento'],
        ':departamentoNacimiento' => $_POST['departamentoNacimiento'],
        ':municipioNacimiento' => $_POST['municipioNacimiento']
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
