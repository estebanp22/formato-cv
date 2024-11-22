<?php
// Configurar encabezado JSON
header('Content-Type: application/json');

// Iniciar sesión para obtener el idPersona
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

// Obtener el idPersona desde la sesión
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

    // Validar campos requeridos
    $requiredFields = ['nivel_educativo', 'semestres-aprobados', 'graduado0', 'carrera', 'fecha-grado-superior', 'num_tarjeta_profesional'];
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

    // Obtener el valor de 'graduado' (Si/No)
    $graduado = ($_POST['graduado0'] == 1) ? 1 : 0;

    // Preparar consulta SQL
    $sql = "INSERT INTO educacion_superior (
                idPersona, modalidad, semestresAprovados, graduado, nombreTitulo, fechaTerminacion, numeroTarjetaProfesional
            ) VALUES (
                :idPersona, :modalidad, :semestresAprovados, :graduado, :nombreTitulo, :fechaTerminacion, :numeroTarjetaProfesional
            )";

    $stmt = $conn->prepare($sql);

    // Ejecutar consulta con los datos del formulario
    $stmt->execute([
        ':idPersona' => $idPersona,
        ':modalidad' => $_POST['nivel_educativo'],
        ':semestresAprovados' => $_POST['semestres-aprobados'],
        ':graduado' => $_POST['graduado0'],
        ':nombreTitulo' => $_POST['carrera'],
        ':fechaTerminacion' => $_POST['fecha-grado-superior'],
        ':numeroTarjetaProfesional' => $_POST['num_tarjeta_profesional']
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
