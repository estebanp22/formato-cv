<?php
// Configurar encabezado JSON
header('Content-Type: application/json');

// Iniciar sesión
session_start();

// Incluir el archivo de conexión a la base de datos
include("../Php/BD.php");

// Inicializar respuesta
$response = [];

// Verificar conexión a la base de datos
if (!$conn) {
    $response['status'] = 'error';
    $response['message'] = 'No se pudo conectar a la base de datos.';
    echo json_encode($response);
    exit;
}

// Verificar que el idPersona esté en la sesión
if (!isset($_SESSION["idPersona"])) {
    $response['status'] = 'error';
    $response['message'] = 'No se encontró el idPersona en la sesión.';
    echo json_encode($response);
    exit;
}

$idPersona = $_SESSION["idPersona"];

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consultar experiencia laboral de la persona
    $sql = "SELECT empresa, naturalezaJuridica, pais, departamento, municipio, correo, telefono, cargo, fechaInicio, fechaFin, dependencia, direccion
            FROM experiencia_laboral WHERE idPersona = :idPersona LIMIT 1";

    $stmt = $conn->prepare($sql);
    $stmt->execute([':idPersona' => $idPersona]);

    $experiencia = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($experiencia) {
        $response['status'] = 'success';
        $response['data'] = $experiencia;
    } else {
        $response['status'] = 'error';
        $response['message'] = 'No se encontraron datos de experiencia laboral para el idPersona proporcionado.';
    }
} catch (PDOException $e) {
    $response['status'] = 'error';
    $response['message'] = 'Error al consultar los datos: ' . $e->getMessage();
}

// Enviar respuesta como JSON
echo json_encode($response);
?>
