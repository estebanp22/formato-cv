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

    <script type="text/javascript" src="Js/pagina2Script.js"></script>
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
                <a class="nav-link active" href="pagina2.php">FORMACION ACADEMICA</a>
                <a href="pagina3.php">EXPERENCIA LABORAL</a>
                <a href="pagina4.php">TIEMPO TOTAL DE EXPERIENCIA</a>
            </div>
        </nav>

        <div class=" row">
            <div class="col-sm-12">
                <h2>FORMACION ACADEMICA</h2>
            </div>

        </div>

        <form id="educacionBasica">
            <div class="row">
                <div class="form-group">

                    <label for="educacion">EDUCACIÓN BÁSICA Y MEDIA</label>

                    <p>SELECCIONE EL ÚLTIMO GRADO APROBADO ( LOS GRADOS DE 1o. A 6o. DE BACHILLERATO EQUIVALEN A LOS
                        GRADOS 6o. A 11o. DE EDUCACIÓN BÁSICA SECUNDARIA Y MEDIA )</p>


                    <select class="form-control" name="grado-escolar" id="grado-escolar">
                        <option value="" disabled selected>Selecciona tu grado escolar</option>
                        <option value="1">Primero</option>
                        <option value="2">Segundo</option>
                        <option value="3">Tercero</option>
                        <option value="4">Cuarto</option>
                        <option value="5">Quinto</option>
                        <option value="6">Sexto</option>
                        <option value="7">Séptimo</option>
                        <option value="8">Octavo</option>
                        <option value="9">Noveno</option>
                        <option value="10">Décimo</option>
                        <option value="11">Undécimo</option>
                    </select>

                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="titulo">TITULO OBTENIDO</label>
                    <select class="form-control" name="titulo-obtenido" id="titulo-obtenido">
                        <option value="" disabled selected>Selecciona el titulo obtenido</option>
                        <option value="primaria">Básica Primaria</option>
                        <option value="secundaria">Básica Secundaria</option>
                        <option value="bachiller">Bachiller</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="fecha-grado">FECHA DE GRADO</label>
                    <input type="date" class="form-control" id="fecha-grado" name="fecha-grado" required>
                </div>
            </div>
        </form>
        <div class="row">
            <button type="button" onclick="guardarEducacionBasica()">Guardar Educacion Basica</button>

        </div>

        <div class="row">
            <label for="educacion">EDUCACIÓN SUPERIOR</label>
        </div>

        <div class="row">
            <p>DILIGENCIE ESTE PUNTO EN ESTRICTO ORDEN CRONOLÓGICO</p>
            <p>Si desea añadir un estudio adicional hagalo en el primer campo y presione guardar</p>
        </div>

        <form id="formularioEducacionSuperior">
            <div class="container">
                <div class="form-group">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>MODALIDAD ACADÉMICA</th>
                                <th>No.SEMESTRES APROBADOS</th>
                                <th>GRADUADO</th>
                                <th>NOMBRE DE LOS ESTUDIOSO TÍTULO OBTENIDO</th>
                                <th>TERMINACIÓN</th>
                                <th>No. DE TARJETA PROFESIONAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select class="form-control" name="nivel_educativo" id="nivel_educativo">
                                        <option value="" disabled selected>Selecciona el nivel educativo</option>
                                        <option value="tc">TC (Técnica)</option>
                                        <option value="tl">TL (Tecnológica)</option>
                                        <option value="te">TE (Tecnológica Especializada)</option>
                                        <option value="un">UN (Universitaria)</option>
                                        <option value="es">ES (Especialización)</option>
                                        <option value="mg">MG (Maestría o Magíster)</option>
                                        <option value="doc">DOC (Doctorado o PhD)</option>
                                    </select>
                                </td>

                                <td>
                                    <select class="form-control" name="semestres-aprobados" id="semestres-aprobados">
                                        <option value="" disabled selected>Seleccionar</option>
                                    </select>
                                </td>

                                <td>
                                    <div class="radio" id="graduado">
                                        <label><input type="radio" id="graduado" value="si" name="graduado">Si</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id="graduado" value="no" name="graduado">No</label>
                                    </div>
                                </td>

                                <td>
                                    <select class="form-control" name="carrera" id="carrera">
                                        <option value="" disabled selected>Selecciona tu carrera</option>
                                        <option value="ingenieria_sistemas">Ingeniería de Sistemas</option>
                                        <option value="ingenieria_civil">Ingeniería Civil</option>
                                        <option value="ingenieria_electronica">Ingeniería Electrónica</option>
                                        <option value="ingenieria_industrial">Ingeniería Industrial</option>
                                        <option value="medicina">Medicina</option>
                                        <option value="enfermeria">Enfermería</option>
                                        <option value="derecho">Derecho</option>
                                        <option value="administracion_empresas">Administración de Empresas</option>
                                        <option value="contaduria_publica">Contaduría Pública</option>
                                        <option value="arquitectura">Arquitectura</option>
                                        <option value="psicologia">Psicología</option>
                                        <option value="comunicacion_social">Comunicación Social</option>
                                        <option value="economia">Economía</option>
                                        <option value="ciencias_politicas">Ciencias Políticas</option>
                                        <option value="diseño_grafico">Diseño Gráfico</option>
                                        <option value="educacion">Educación</option>
                                        <option value="quimica">Química</option>
                                        <option value="biologia">Biología</option>
                                        <option value="fisica">Física</option>
                                        <option value="matematicas">Matemáticas</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="date" class="form-control" id="fecha-grado-superior" name="fecha-grado-superior" required>

                                </td>
                                <td>
                                    <input type="text" class="form-control" id="num_tarjeta_profesional" name = "num_tarjeta_profesional">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>

        <div class="row">
            <button type="button" onclick="guardarEducacionSuperior()">Guardar Educacion Superior</button>
        </div>

        <div class="row">
            <p>ESPECÍFIQUE LOS IDIOMAS DIFERENTES AL ESPAÑOL QUE: HABLA, LEE, ESCRIBE DE FORMA, REGULAR (R), BIEN (B) O
                MUY BIEN (MB)</p>
        <p>Si desea añadir un estudio adicional hagalo en el primer campo y presione guardar</p>

        </div>

        <form id="formularioIdioma">
            <div class="container">
                <div class="form-group">
                    <table class="table table-striped" id="tablaIdiomas">
                        <thead>
                            <tr>
                                <th>IDIOMA</th>
                                <th>LO HABLA</th>
                                <th>LO LEE</th>
                                <th>LO ESCRIBE</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select class="form-control" name="idioma" id="idioma">
                                        <option value="" disabled selected>Selecciona tu idioma</option>
                                        <option value="espanol">Español</option>
                                        <option value="ingles">Inglés</option>
                                        <option value="frances">Francés</option>
                                        <option value="aleman">Alemán</option>
                                        <option value="italiano">Italiano</option>
                                        <option value="portugues">Portugués</option>
                                        <option value="chino_mandarin">Chino Mandarín</option>
                                        <option value="japones">Japonés</option>
                                        <option value="ruso">Ruso</option>
                                        <option value="arabe">Árabe</option>
                                        <option value="hindu">Hindú</option>
                                        <option value="coreano">Coreano</option>
                                    </select>
                                </td>

                                <td>
                                    <select class="form-control" name="nivel-habla-idioma" id="nivel-habla-idioma">
                                        <option value="" disabled selected>Selecciona</option>
                                        <option value="regular">Regular</option>
                                        <option value="bien">Bien</option>
                                        <option value="muy_bien">Muy bien</option>
                                    </select>
                                </td>

                                <td>
                                    <select class="form-control" name="nivel-lee-idioma" id="nivel-lee-idioma">
                                    <option value="" disabled selected>Selecciona</option>
                                    <option value="regular">Regular</option>
                                    <option value="bien">Bien</option>
                                    <option value="muy_bien">Muy bien</option>
                                    </select>
                                </td>

                                <td>
                                    <select class="form-control" name="nivel-escribe-idioma" id="nivel-escribe-idioma">
                                        <option value="" disabled selected>Selecciona</option>
                                        <option value="regular">Regular</option>
                                        <option value="bien">Bien</option>
                                        <option value="muy_bien">Muy bien</option>
                                    </select>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </form>

        <div class="row">
            <button type="button" onclick="guardarIdioma()">Guardar Idioma</button>
        </div>
    </div>

</body>

</html>