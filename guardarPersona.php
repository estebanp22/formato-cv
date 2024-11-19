<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("BD.php");

if (!$conn) {
    echo json_encode(["status" => "error", "message" => "No se pudo conectar a la base de datos."]);
    exit;
}


header('Content-Type: application/json');

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar que los datos del formulario estén presentes
    /*
    if (!isset($_POST['primerApellido'], $_POST['segundoApellido'], $_POST['nombres'], $_POST['tipoDocumento'], $_POST['numeroDocumento'], $_POST['genero'], $_POST['fechaNacimiento'], $_POST['paisNacimiento'])) {
        echo json_encode(["status" => "error", "message" => "Faltan datos en el formulario."]);
        exit;
    }
*/

    // Consulta SQL para insertar datos
    $sql = "INSERT INTO persona (primerApellido, segundoApellido, nombres, tipoDocumento, numeroDocumento, genero, fechaNacimiento, paisNacimiento)
            VALUES (:primerApellido, :segundoApellido, :nombres, :tipoDocumento, :numeroDocumento, :genero, :fechaNacimiento, :paisNacimiento)";

    $stmt = $conn->prepare($sql);

    // Ejecutar la consulta con los datos del formulario
    $stmt->execute([
        ':primerApellido' => $_POST['primerApellido'],
        ':segundoApellido' => $_POST['segundoApellido'],
        ':nombres' => $_POST['nombres'],
        ':tipoDocumento' => $_POST['tipoDocumento'],
        ':numeroDocumento' => $_POST['numeroDocumento'],
        ':genero' => $_POST['genero'],
        ':fechaNacimiento' => $_POST['fechaNacimiento'],
        ':paisNacimiento' => $_POST['paisNacimiento'],
    ]);

    // Respuesta exitosa
    echo json_encode([
        "status" => "success",
        "message" => "Datos guardados exitosamente.",
    ]);
} catch (PDOException $e) {
    // Manejar errores de la base de datos
    echo json_encode([
        "status" => "error",
        "message" => "Error al guardar los datos: " . $e->getMessage(),
    ]);
}
?>
