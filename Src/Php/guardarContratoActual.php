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
    $requiredFields = ['empresa-actual', 'tipo-empresa-actual', 'pais_empresa', 'departamento_empresa', 'ciudad-empresa', 'email-empresa', 'telefono-empresa', 'fecha-ingreso', 'cargo_contrato', 'dependencia', 'direccion'];
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

    // Determinar si la experiencia está vigente
    $vigente = isset($_POST['tipo-empresa-actual']) && $_POST['tipo-empresa-actual'] == 'privada' ? 1 : 0;

    // Obtener fechaFin como NULL si no se proporciona
    $fechaFin = empty($_POST['fecha-fin']) ? NULL : $_POST['fecha-fin'];

    // Preparar consulta SQL para insertar los datos
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
        ':empresa' => $_POST['empresa-actual'],
        ':naturalezaJuridica' => $_POST['tipo-empresa-actual'],
        ':pais' => $_POST['pais_empresa'],
        ':departamento' => $_POST['departamento_empresa'],
        ':municipio' => $_POST['ciudad-empresa'],
        ':correo' => $_POST['email-empresa'],
        ':telefono' => $_POST['telefono-empresa'],
        ':cargo' => $_POST['cargo_contrato'],
        ':fechaInicio' => $_POST['fecha-ingreso'],
        ':fechaFin' => $fechaFin,  // Puede ser NULL
        ':dependencia' => $_POST['dependencia'],
        ':direccion' => $_POST['direccion']
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
