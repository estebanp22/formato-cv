<?php
ob_start();

// Iniciar la sesión
session_start();

if (isset($_POST["idPersona"])) {
    // Obtener el ID de la persona
    $idPersona = $_POST["idPersona"];

    // Guardar el ID en la sesión
    $_SESSION["idPersona"] = $idPersona;

    header("Location: ../Pages/pagina1.php");
    exit();
} else {
    header('Location: ../../../index.php?type=formDataNotDefined');
    exit();
}

?>
