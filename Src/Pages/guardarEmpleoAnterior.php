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
    $requiredFields = ['empresa-anterior', 'tipo-empresa-anterior', 'pais_empresa-anterior', 'departamento_empresa-anterior', 'ciudad-empresa-anterior', 'email-empresa-anterior', 'telefono-empresa-anterior', 'fecha-ingreso-anterior', 'fecha-fin-anterior', 'cargo_contrato-anterior', 'dependencia-anterior', 'direccion-anterior'];
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

    // Determinar si la experiencia está vigente (esto será "0" para empleo anterior)
    $vigente = 0;

    // Preparar consulta SQL para insertar los datos de empleo anterior
    $sql = "INSERT INTO experiencia_laboral (
                idPersona, vigente, empresa, naturalezaJuridica, pais, departamento, municipio, correo, telefono, cargo, fechaInicio, fechaFin, dependencia, direccion
            ) VALUES (
                :idPersona, :vigente, :empresa, :naturalezaJuridica, :pais, :departamento, :municipio, :correo, :telefono, :cargo, :fechaInicio, :fechaFin, :dependencia, :direccion
            )";

    $stmt = $conn->prepare($sql);

    // Ejecutar consulta con los datos del formulario
    $stmt->execute([
        ':idPersona' => $idPersona,
        ':vigente' => $vigente,
        ':empresa' => $_POST['empresa-anterior'],
        ':naturalezaJuridica' => $_POST['tipo-empresa-anterior'],
        ':pais' => $_POST['pais_empresa-anterior'],
        ':departamento' => $_POST['departamento_empresa-anterior'],
        ':municipio' => $_POST['ciudad-empresa-anterior'],
        ':correo' => $_POST['email-empresa-anterior'],
        ':telefono' => $_POST['telefono-empresa-anterior'],
        ':cargo' => $_POST['cargo_contrato-anterior'],
        ':fechaInicio' => $_POST['fecha-ingreso-anterior'],
        ':fechaFin' => $_POST['fecha-fin-anterior'],  // Fecha de fin proporcionada
        ':dependencia' => $_POST['dependencia-anterior'],
        ':direccion' => $_POST['direccion-anterior']
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
