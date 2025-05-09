<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoja de Vida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script type="text/javascript" src="Js/pagina4Script.js"></script>
    <link rel="stylesheet" href="../Css/estiloGeneral.css">

</head>

<body onload="cargaInicial()">
    <div class="container">

        <div class="row">
            <div class="col-sm-4">
                <img src="../../Imagenes/Escudo.png">
            </div>
            <div class="col-sm-4">
                <h2>Formato Unico</h2>
                <h1>HOJA DE VIDA</h1>
                <h2>Persona Natural</h2>
                <h3>(Leyes 190 de 1995, 489 y 443 de 1998)</h3>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="usr">ENTIDAD RECEPTORA</label>
                    <input type="text" class="form-control" id="entidad-receptora">
                </div>
            </div>
        </div>


        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../../index.php">HOJA DE VIDA</a>
                </div>
                <a href="pagina1.php">DATOS PERSONALES</a>
                <a href="pagina2.php">FORMACION ACADEMICA</a>
                <a href="pagina3.php">EXPERENCIA LABORAL</a>
                <a class="nav-link active" href="pagina4.php">TIEMPO TOTAL DE EXPERIENCIA</a>
            </div>
        </nav>

        <div class=" row">
            <div class="col-sm-12">
                <h2>TIEMPO TOTAL DE EXPERIENCIA</h2>
            </div>

        </div>

        <div class="row">
            <p>INDIQUE EL TIEMPO TOTAL DE SU EXPERIENCIA LABORAL EN NÚMERO DE AÑOS Y MESES.</p>
        </div>

        <form id="formularioTiempoExperiencia">
            <div class="container">
                <div class="form-group">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>OCUPACIÓN</th>
                            <th>TIEMPO DE EXPERIENCIA</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>AÑOS</th>
                            <th>MESES</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <label for="entidad">SERVIDOR PÚBLICO</label>
                            </td>
                            <td>
                                <select class="form-control" name="anios-servidor-publico" id="anios-servidor-publico">
                                    <option value="" disabled selected>Seleccione</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control" name="meses-servidor-publico" id="meses-servidor-publico">
                                    <option value="" disabled selected>Seleccione</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="entidad">EMPLEADO DEL SECTOR PRIVADO</label>
                            </td>
                            <td>
                                <select class="form-control" name="anios-servidor-privado" id="anios-servidor-privado">
                                    <option value="" disabled selected>Seleccione</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control" name="meses-servidor-privado" id="meses-servidor-privado">
                                    <option value="" disabled selected>Seleccione</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="entidad">TRABAJADOR INDEPENDIENTE</label>
                            </td>
                            <td>
                                <select class="form-control" name="anios-independiente" id="anios-independiente">
                                    <option value="" disabled selected>Seleccione</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control" name="meses-independiente" id="meses-independiente">
                                    <option value="" disabled selected>Seleccione</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="entidad">TOTAL TIEMPO EXPERIENCIA</label>
                            </td>
                            <td>
                                <p id="anios-totales"></p>
                            </td>
                            <td>
                                <p id="meses-totales"></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>


        <div class="row">
            <button type="button" onclick="calcularTotal()">Calcular Total Experiencia</button>

        </div>

        <div class="row">
            <button type="button" onclick="guardarTiempoExperiencia(event)">Guardar Tiempo de esperiencia</button>

        </div>
        </br>
        <button type="button" class="btn-guardar">GUARDAR</button>
    </div>
</body>

</html>