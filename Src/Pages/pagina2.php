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


    <link rel="stylesheet" href="../Css/estilo.css">

</head>

<body>
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
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="mes-grado">MES</label>

                <select class="form-control" name="mes-grado" id="mes-grado">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>

            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="anio-grado">AÑO</label>
                <select class="form-control" name="anio-grado" id="anio-grado">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="1940">1940</option>
                    <option value="1941">1941</option>
                    <option value="1942">1942</option>
                    <option value="1943">1943</option>
                    <option value="1944">1944</option>
                    <option value="1945">1945</option>
                    <option value="1946">1946</option>
                    <option value="1947">1947</option>
                    <option value="1948">1948</option>
                    <option value="1949">1949</option>
                    <option value="1950">1950</option>
                    <option value="1951">1951</option>
                    <option value="1952">1952</option>
                    <option value="1953">1953</option>
                    <option value="1954">1954</option>
                    <option value="1955">1955</option>
                    <option value="1956">1956</option>
                    <option value="1957">1957</option>
                    <option value="1958">1958</option>
                    <option value="1959">1959</option>
                    <option value="1960">1960</option>
                    <option value="1961">1961</option>
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>
                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                </select>

            </div>
        </div>

        <div class="row">
            <label for="educacion">EDUCACIÓN BÁSICA Y MEDIA</label>
        </div>

        <div class="row">
            <p>DILIGENCIE ESTE PUNTO EN ESTRICTO ORDEN CRONOLÓGICO</p>
        </div>

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
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </td>

                            <td>
                                <div class="radio">
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
                                <select class="form-control" id="mes-grado" name ="mes-grado">
                                    <option value="" disabled selected>Mes</option>
                                    <option value="1">ENERO</option>
                                    <option value="2">FEBRERO</option>
                                    <option value="3">MARZO</option>
                                    <option value="4">ABRIL</option>
                                    <option value="5">MAYO</option>
                                    <option value="6">JUNIO</option>
                                    <option value="7">JULIO</option>
                                    <option value="8">AGOSTO</option>
                                    <option value="9">SEPTIEMBRE</option>
                                    <option value="10">OCTUBRE</option>
                                    <option value="11">NOVIEMBRE</option>
                                    <option value="12">DICIEMBRE</option>
                                </select>

                                <select class="form-control" id="anio-grado" name = "anio-grado">
                                    <option value="" disabled selected>Año</option>

                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>

                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="num_tarjeta_profesional" name = "num_tarjeta_profesional">
                            </td>
                        </tr>



                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <p>ESPECÍFIQUE LOS IDIOMAS DIFERENTES AL ESPAÑOL QUE: HABLA, LEE, ESCRIBE DE FORMA, REGULAR (R), BIEN (B) O
                MUY BIEN (MB)</p>
        </div>

        <div class="container">
            <div class="form-group">
                <table class="table table-striped">
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

</body>

</html>