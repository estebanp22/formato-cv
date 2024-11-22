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

    // Consultar datos de la educación básica y media
    $sql = "SELECT ultimoAnioCursado, tituloObtenido, fechaGrado
            FROM educacion_basica_media WHERE idPersona = :idPersona";

    $stmt = $conn->prepare($sql);
    $stmt->execute([':idPersona' => $idPersona]);

    $educacion = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($educacion) {
        $response['status'] = 'success';
        $response['data'] = $educacion;
    } else {
        $response['status'] = 'error';
        $response['message'] = 'No se encontraron datos de educación para esta persona.';
    }
} catch (PDOException $e) {
    // Manejar errores de la base de datos
    $response['status'] = 'error';
    $response['message'] = 'Error al consultar los datos: ' . $e->getMessage();
}

// Enviar la respuesta como JSON
echo json_encode($response);
?>
