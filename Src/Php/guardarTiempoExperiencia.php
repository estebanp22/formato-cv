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



    // Convertir años y meses en meses totales
    $mesesServidorPublico = ($_POST['anios-servidor-publico'] * 12) + $_POST['meses-servidor-publico'];
    $mesesServidorPrivado = ($_POST['anios-servidor-privado'] * 12) + $_POST['meses-servidor-privado'];
    $mesesIndependiente = ($_POST['anios-independiente'] * 12) + $_POST['meses-independiente'];

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
        ':mesesSectorPublico' => $mesesServidorPublico,
        ':mesesSectorPrivado' => $mesesServidorPrivado,
        ':MesesIndependiente' => $mesesIndependiente
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
