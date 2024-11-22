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

    <script type="text/javascript" src="Js/pagina3Script.js"></script>
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
                <a class="nav-link active" href="pagina3.php">EXPERENCIA LABORAL</a>
                <a href="pagina4.php">TIEMPO TOTAL DE EXPERIENCIA</a>
            </div>
        </nav>

        <div class=" row">
            <div class="col-sm-12">
                <h2>EXPERIENCIA LABORAL</h2>
            </div>

        </div>

        <div class="row">
            <p>RELACIONE SU EXPERIENCIA LABORAL O DE PRESTACIÓN DE SERVICIOS EN ESTRICTO ORDEN CRONOLÓGICO COMENZANDO
                POR EL ACTUAL</p>
        </div>

        <div class="row">
            <label for="empleo-act">EMPLEO ACTUAL O CONTRATO VIGENTE</label>
        </div>

        <form id="formularioEmpleoActual">
            <div class="row">
                <div class="form-group">
                    <label for="empresa">EMPRESA O ENTIDAD</label>
                    <input type="text" class="form-control" id="empresa" name="empresa-actual">

                    <div class="radio">
                        <label><input type="radio" id="tipo-empresa-publica" value="publica" name="tipo-empresa-actual">Publica</label>
                    </div>

                    <div class="radio">
                        <label><input type="radio" id="tipo-empresa-privada" value="privada" name="tipo-empresa-actual">Privada</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="pais-empresa">PAIS</label>
                    <select class="form-control" name="pais_empresa" id="pais_empresa">
                        <option value="" disabled selected>Selecciona</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="departamento-empresa">DEPARTAMENTO</label>
                    <select class="form-control" name="departamento_empresa" id="departamento_empresa">
                        <option value="" disabled selected>Selecciona tu departamento</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="municipio-empresa">MUNICIPIO</label>
                    <select class="form-control" name="ciudad-empresa" id="ciudad-empresa">
                        <option value="" disabled selected>Selecciona tu ciudad</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="correo-empresa">CORREO ELECTRONICO ENTIDAD</label>
                    <input type="text" class="form-control" id="email-empresa" name="email-empresa">
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="telefono-empresa">TELEFONO</label>
                    <input type="text" class="form-control" id="telefono-empresa" name="telefono-empresa">
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="fecha-ingreso">FECHA DE INGRESO</label>
                    <input type="date" class="form-control" id="fecha-ingreso" name="fecha-ingreso" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="usr">Cargo o contrato</label>
                    <input type="text" class="form-control" id="cargo_contrato" name="cargo_contrato">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="usr">Dependencia</label>
                    <input type="text" class="form-control" id="dependencia" name="dependencia">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="usr">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion">
                </div>
            </div>
        </form>

        <div class="row">
            <button type="button" onclick="guardarExperienciaLaboral()">Guardar Informacion Empleo Actual</button>
        </div>

        <form id="formularioEmpleoAnterior">

            <div class="row">
                <label for="empleo-ANT">EMPLEO O CONTRATO ANTERIOR</label>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="empresa">EMPRESA O ENTIDAD</label>
                    <input type="text" class="form-control" id="empresa-anterior" name="empresa-anterior">

                    <div class="radio">
                        <label><input type="radio" id="tipo-empresa-anterior" value="publica" name="tipo-empresa-anterior">Publica</label>
                    </div>

                    <div class="radio">
                        <label><input type="radio" id="tipo-empresa-anterior" value="privada" name="tipo-empresa-anterior">Privada</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="pais-empresa">PAIS</label>
                    <select class="form-control" name="pais_empresa-anterior" id="pais_empresa-anterior">
                        <option value="" disabled selected>Selecciona</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="departamento-empresa">DEPARTAMENTO</label>
                    <select class="form-control" name="departamento_empresa-anterior" id="departamento_empresa-anterior">
                        <option value="" disabled selected>Selecciona tu departamento</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="municipio-empresa">MUNICIPIO</label>
                    <select class="form-control" name="ciudad-empresa-anterior" id="ciudad-empresa-anterior">
                        <option value="" disabled selected>Selecciona tu ciudad</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="correo-empresa">CORREO ELECTRONICO ENTIDAD</label>
                    <input type="text" class="form-control" id="email-empresa-anterior" name="email-empresa-anterior">
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="telefono-empresa">TELEFONO</label>
                    <input type="text" class="form-control" id="telefono-empresa-anterior" name="telefono-empresa-anterior">
                </div>
            </div>
            <div class="row">
                            <div class="form-group">
                                <label for="fecha-ingreso-anterior">FECHA DE INGRESO</label>
                                <input type="date" class="form-control" id="fecha-ingreso-anteriorr" name="fecha-ingreso-anterior" required>
                            </div>
                        </div>

            <div class="row">
                            <div class="form-group">
                                <label for="fecha-fin-anterior">FECHA DE RETIRO</label>
                                <input type="date" class="form-control" id="fecha-fin-anterior" name="fecha-fin-anterior" required>
                            </div>
                        </div>
            <div class="row">
                <div class="form-group">
                    <label for="usr">Cargo o contrato</label>
                    <input type="text" class="form-control" id="cargo_contrato-anterior" name="cargo_contrato-anterior">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="usr">Dependencia</label>
                    <input type="text" class="form-control" id="dependencia-anterior" name="dependencia-anterior">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="usr">Direccion</label>
                    <input type="text" class="form-control" id="direccion-anterior" name="direccion-anterior">
                </div>
            </div>
        </form>
        <div class="row">
                <button type="button" onclick="guardarEmpleoAnterior()">Guardar Informacion Empleo Anterior</button>
        </div>
    </div>
</body>

</html>