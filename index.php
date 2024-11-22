<?php
ob_start();
session_start();
session_destroy();
?>
<?php
session_start();

if (isset($_SESSION["idPersona"])) {
    $idPersona = $_SESSION["idPersona"];
    echo "El ID de la persona es: " . $idPersona;
} else {
    echo "No hay ningún ID registrado.";
}
?>

<?php
include("Src/Php/BD.php");

try {
    if (!$conn) {
        throw new Exception("No se pudo conectar a la base de datos.");
    }

    $sql = "SELECT idPersona, nombres, primerApellido, segundoApellido FROM persona";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $personas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $personas = [];
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    exit;
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoja de Vida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Src/Css/estiloIndex.css">

</head>

<body>
    <div class="container">
        <div class="header row align-items-center">
            <div class="col-sm-4 text-center">
                <img src="Imagenes/Escudo.png" alt="Escudo">
            </div>
            <div class="col-sm-8 text-center">
                <h2>Formato Único</h2>
                <h1>HOJA DE VIDA</h1>
                <h2>Persona Natural</h2>
            </div>
        </div>



<!-- Ingreso por primera vez -->
    <div class="form-container mt-4">
            <p>Si vas a diligenciar por primera vez tu hoja de vida, ingresa aqui tu número de documento:</p>
            <form method="POST" action="Src/Php/guardarSesion.php">
                <div class="mb-3">
                    <label for="idPersona" class="form-label">Numero de documento:</label>
                    <input type="text" class="form-control" id="idPersona" name="idPersona">
                </div>
                <button href="Src/Pages/pagina1.php" type="submit" class="btn btn-success btn-block">Iniciar</button>
            </form>
        </div>

        <div class="container">
            <h3 class="text-center">Historial de Hojas de Vida</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID de Persona</th>
                        <th>Nombres</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Ver</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($personas)) : ?>
                        <?php foreach ($personas as $index => $persona) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= htmlspecialchars($persona['idPersona']) ?></td>
                                <td><?= htmlspecialchars($persona['nombres']) ?></td>
                                <td><?= htmlspecialchars($persona['primerApellido']) ?></td>
                                <td><?= htmlspecialchars($persona['segundoApellido']) ?></td>
                                <td>
                                    <form method="POST" action="Src/Php/guardarSesion.php">
                                        <!-- Campo oculto que lleva el idPersona de la fila -->
                                        <input type="hidden" name="idPersona" value="<?= htmlspecialchars($persona['idPersona']) ?>">
                                        <!-- Botón de enviar -->
                                        <button type="submit" class="btn btn-success btn-block">Ver</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="6" class="text-center">No hay registros disponibles</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>



        <footer>
            <p>© 2024 - Sistema de Hoja de Vida. Todos los derechos reservados.</p>
        </footer>
    </div>
</body>

</html>