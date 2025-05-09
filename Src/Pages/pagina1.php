<?php
session_start();

if (isset($_SESSION["idPersona"])) {
    $idPersona = $_SESSION["idPersona"];
    echo "El ID de la persona es: " . $idPersona;
} else {
    echo "No hay ningún ID registrado.";
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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script type="text/javascript" src="Js/pagina1Script.js"></script>
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
                <a class="nav-link active" href="pagina1.php">DATOS PERSONALES</a>
                <a href="pagina2.php">FORMACION ACADEMICA</a>
                <a href="pagina3.php">EXPERENCIA LABORAL</a>
                <a href="pagina4.php">TIEMPO TOTAL DE EXPERIENCIA</a>
            </div>
        </nav>
        <form id="formularioPersona">

            <div class="row">
                <div class="col-sm-12">
                    <h2>DATOS PERSONALES</h2>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="primer-apellido">PRIMER APELLIDO</label>
                    <input type="text" class="form-control" id="primer-apellido" name="primerApellido" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="segundo-apellido">SEGUNDO APELLIDO (O DE CASADA)</label>
                    <input type="text" class="form-control" id="segundo-apellido" name="segundoApellido">
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="nombres">NOMBRES</label>
                    <input type="text" class="form-control" id="nombres" name="nombres" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="documento-identificacion">DOCUMENTO DE IDENTIFICACIÓN</label>

                    <div class="radio">
                        <label><input type="radio" id="documento-cc" value="cc" name="tipoDocumento">Cédula de Ciudadanía</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" id="documento-ce" value="ce" name="tipoDocumento">Cédula de Extranjería</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" id="documento-pas" value="pas" name="tipoDocumento">Pasaporte</label>
                    </div>

                    <div class="form-group">
                        <label for="numero-documento">NÚMERO DE DOCUMENTO</label>
                        <input type="text" class="form-control" id="numero-documento" name="numeroDocumento" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="genero">genero</label>
                    <div class="radio">
                        <label><input type="radio" id="genero-f" value="f" name="genero">Femenino</label>
                    </div>

                    <div class="radio">
                        <label><input type="radio" id="genero-m" value="m" name="genero">Masculino</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="nacionalidad">NACIONALIDAD</label>

                    <div class="radio">
                        <label><input type="radio" id="nacionalidad-col" value="col" name="nacionalidad">Colombiano</label>
                    </div>

                    <div class="radio">
                        <label><input type="radio" id="nacionalidad-ext" value="ext" name="nacionalidad">Extranjero</label>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="fecha-lugar-nacimiento">FECHA Y LUGAR DE NACIMIENTO</label>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="fechaNacimiento">FECHA DE NACIMIENTO</label>
                    <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="pais-nacimiento">PAÍS DE NACIMIENTO</label>
                    <select class="form-control" name="paisNacimiento" id="pais-nacimiento">
                        <option value="" disabled selected>Selecciona tu país</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="departamento-nacimiento">DEPARTAMENTO DE NACIMIENTO</label>
                    <select class="form-control" name="departamentoNacimiento" id="departamentoNacimiento">
                        <option value="" disabled selected>Selecciona tu departamento</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="ciudad-nacimiento">CIUDAD DE NACIMIENTO</label>
                    <select class="form-control" name="municipioNacimiento" id="municipioNacimiento">
                        <option value="" disabled selected>Selecciona tu ciudad</option>
                    </select>
                </div>
            </div>

        </form>



        <div class="row">
            <button type="button" onclick="guardarPersona()">Guardar Informacion Personal</button>

        </div>

        <form id="formulariolibreta">

            <div class="row">
                <div class="form-group">
                    <label for="lib-militar">LIBRETA MILITAR</label>

                    <div class="radio">
                        <label><input type="radio" id="clase-libreta" value="1" name="clase-libreta">Primera clase</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" id="clase-libreta" value="2" name="clase-libreta">Segunda clase</label>
                    </div>

                    <label for="num-libreta">NUMERO</label>
                    <input type="text" class="form-control" id="numero-libreta" name="numero-libreta">

                    <label for="num-libreta">DISTRITO MILITAR</label>
                    <input type="text" class="form-control" id="dm-libreta" name="dm-libreta">
                </div>

            </div>

        </form>
        <div class="row">
            <button type="button" onclick="guardarLibretaMilitar()">Guardar Libreta Militar</button>

        </div>

        <form id="formularioCorrespondencia">

            <div class="row">
                <div class="form-group">
                    <label for="direccion-correspondencia">DIRECCIÓN DE CORRESPONDENCIA</label>
                    <input type="text" class="form-control" id="direccion-correspondencia" name="direccion-correspondencia">
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="pais-correspondencia">PAIS DE CORRESPONDENCIA</label>
                    <select class="form-control" name="pais-correspondencia" id="pais-correspondencia">
                        <option value="" disabled selected>Selecciona tu país</option>
                    </select>

                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="departamento-correspondencia">DEPARTAMENTO DE CORRESPONDENCIA</label>
                    <select class="form-control" name="departamento-correspondencia" id="departamento-correspondencia">
                        <option value="" disabled selected>Selecciona tu departamento</option>
                    </select>

                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="ciudad-correspondencia">CIUDAD DE CORRESPONDENCIA</label>
                    <select class="form-control" name="municipio-correspondencia" id="municipio-correspondencia">
                        <option value="" disabled selected>Selecciona tu ciudad</option>
                    </select>
                </div>

            </div>

            <div class="row">
                <div class="form-group">
                    <label for="telefono">TELEFONO</label>
                    <input type="text" class="form-control" id="telefono" name = "telefono">
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="text" class="form-control" id="email" name = "email">
                </div>
            </div>
        </form>
        <div class="row">
            <button type="button" onclick="guardarDireccionCorrespondencia()"> Guardar Direccion de Correspondencia </button>

        </div>
    </div>

</body>
<script>
        const idPersonaFromSession = '<?php echo $idPersona; ?>';

        if (idPersonaFromSession) {
            document.querySelector('[name="numeroDocumento"]').value = idPersonaFromSession;
            document.querySelector('[name="numeroDocumento"]').disabled = true;
        }
    </script>

</html>