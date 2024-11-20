<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoja de Vida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                <h3>(Leyes 190 de 1995, 489 y 443 de 1998)</h3>
            </div>
        </div>

        <div class="form-container mt-4">
            <p>Si ya cuentas con un avance en tu hoja de vida, ingresa tu número de documento:</p>
            <form method="POST" action="Src/Php/guardarSesion.php">
                <div class="mb-3">
                    <label for="idPersona" class="form-label">ID de la Persona:</label>
                    <input type="text" class="form-control" id="idPersona" name="idPersona" required>
                </div>
                <button type="submit" class="btn btn-success btn-block">Enviar</button>
            </form>
        </div>

        <div class="text-center mt-4">
            <a href="Src/Pages/pagina1.php" class="btn btn-primary btn-block">DILIGENCIAR HOJA DE VIDA</a>
        </div>

        <div class="container">
            <h3 class="text-center">Historial de Hojas de Vida</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID de Persona</th>
                        <th>Nombres</th>
                        <th>Primer apellido</th>
                        <th>Segundo apellido</th>
                        <th>Ver</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>12345678</td>
                        <td>Juan</td>
                        <td>Perez</td>
                        <td>Lopez</td>
                        <td>
                            <button class="btn btn-info btn-sm">Ver</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <footer>
            <p>© 2024 - Sistema de Hoja de Vida. Todos los derechos reservados.</p>
        </footer>
    </div>
</body>

</html>