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

        <div class="row">
            <div class="form-group">
                <label for="empresa">EMPRESA O ENTIDAD</label>
                <input type="text" class="form-control" id="empresa" name="empresa-actual">

                <div class="radio">
                    <label><input type="radio" id="tipo-empresa-actual" value="publica" name="tipo-empresa-actual">Publica</label>
                </div>

                <div class="radio">
                    <label><input type="radio" id="tipo-empresa-actual" value="privada" name="tipo-empresa-actual">Privada</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="pais-empresa">PAIS</label>
                <select class="form-control" name="pais_empresa" id="pais_empresa">
                    <option value="" disabled selected>Selecciona</option>
                    <option value="co">Colombia</option>
                    <option value="ar">Argentina</option>
                    <option value="br">Brasil</option>
                    <option value="cl">Chile</option>
                    <option value="mx">México</option>
                    <option value="es">España</option>
                    <option value="us">Estados Unidos</option>
                    <option value="fr">Francia</option>
                    <option value="de">Alemania</option>
                    <option value="it">Italia</option>
                    <option value="uk">Reino Unido</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="departamento-empresa">DEPARTAMENTO</label>
                <select class="form-control" name="departamento_empresa" id="departamento_empresa">
                    <option value="" disabled selected>Selecciona tu departamento</option>
                    <option value="amazonas">Amazonas</option>
                    <option value="antioquia">Antioquia</option>
                    <option value="arauca">Arauca</option>
                    <option value="atlantico">Atlántico</option>
                    <option value="bolivar">Bolívar</option>
                    <option value="boyaca">Boyacá</option>
                    <option value="caldas">Caldas</option>
                    <option value="caqueta">Caquetá</option>
                    <option value="casanare">Casanare</option>
                    <option value="cauca">Cauca</option>
                    <option value="cesar">Cesar</option>
                    <option value="choco">Chocó</option>
                    <option value="cordoba">Córdoba</option>
                    <option value="cundinamarca">Cundinamarca</option>
                    <option value="guainia">Guainía</option>
                    <option value="guaviare">Guaviare</option>
                    <option value="huila">Huila</option>
                    <option value="la_guajira">La Guajira</option>
                    <option value="magdalena">Magdalena</option>
                    <option value="meta">Meta</option>
                    <option value="narino">Nariño</option>
                    <option value="norte_santander">Norte de Santander</option>
                    <option value="putumayo">Putumayo</option>
                    <option value="quindio">Quindío</option>
                    <option value="risaralda">Risaralda</option>
                    <option value="san_andres">San Andrés y Providencia</option>
                    <option value="santander">Santander</option>
                    <option value="sucre">Sucre</option>
                    <option value="tolima">Tolima</option>
                    <option value="valle_cauca">Valle del Cauca</option>
                    <option value="vaupes">Vaupés</option>
                    <option value="vichada">Vichada</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="municipio-empresa">MUNICIPIO</label>
                <select class="form-control" name="ciudad-empresa" id="ciudad-empresa">
                    <option value="" disabled selected>Selecciona tu ciudad</option>
                    <option value="leticia">Leticia (Amazonas)</option>
                    <option value="medellin">Medellín (Antioquia)</option>
                    <option value="bello">Bello (Antioquia)</option>
                    <option value="itagui">Itagüí (Antioquia)</option>
                    <option value="envigado">Envigado (Antioquia)</option>
                    <option value="barranquilla">Barranquilla (Atlántico)</option>
                    <option value="soledad">Soledad (Atlántico)</option>
                    <option value="malambo">Malambo (Atlántico)</option>
                    <option value="sabanalarga">Sabanalarga (Atlántico)</option>
                    <option value="cartagena">Cartagena (Bolívar)</option>
                    <option value="magangue">Magangué (Bolívar)</option>
                    <option value="turbo">Turbaco (Bolívar)</option>
                    <option value="tunja">Tunja (Boyacá)</option>
                    <option value="duitama">Duitama (Boyacá)</option>
                    <option value="sogamoso">Sogamoso (Boyacá)</option>
                    <option value="manizales">Manizales (Caldas)</option>
                    <option value="villamaria">Villamaría (Caldas)</option>
                    <option value="la_dorada">La Dorada (Caldas)</option>
                    <option value="popayan">Popayán (Cauca)</option>
                    <option value="santander_quilichao">Santander de Quilichao (Cauca)</option>
                    <option value="guapi">Guapi (Cauca)</option>
                    <option value="valledupar">Valledupar (Cesar)</option>
                    <option value="aguachica">Aguachica (Cesar)</option>
                    <option value="bosconia">Bosconia (Cesar)</option>
                    <option value="monteria">Montería (Córdoba)</option>
                    <option value="lorica">Lorica (Córdoba)</option>
                    <option value="cerete">Cereté (Córdoba)</option>
                    <option value="bogota">Bogotá (Cundinamarca)</option>
                    <option value="soacha">Soacha (Cundinamarca)</option>
                    <option value="chia">Chía (Cundinamarca)</option>
                    <option value="neiva">Neiva (Huila)</option>
                    <option value="pitalito">Pitalito (Huila)</option>
                    <option value="garzon">Garzón (Huila)</option>
                    <option value="santa_marta">Santa Marta (Magdalena)</option>
                    <option value="ciudad_libertad">Ciénaga (Magdalena)</option>
                    <option value="plato">Plato (Magdalena)</option>
                    <option value="villavicencio">Villavicencio (Meta)</option>
                    <option value="granada_meta">Granada (Meta)</option>
                    <option value="acacias">Acacías (Meta)</option>
                    <option value="cucuta">Cúcuta (Norte de Santander)</option>
                    <option value="ocana">Ocaña (Norte de Santander)</option>
                    <option value="pamplona">Pamplona (Norte de Santander)</option>
                    <option value="armenia">Armenia (Quindío)</option>
                    <option value="calarca">Calarcá (Quindío)</option>
                    <option value="montenegro">Montenegro (Quindío)</option>
                    <option value="pereira">Pereira (Risaralda)</option>
                    <option value="dosquebradas">Dosquebradas (Risaralda)</option>
                    <option value="santa_rosa_cabral">Santa Rosa de Cabal (Risaralda)</option>
                    <option value="bucaramanga">Bucaramanga (Santander)</option>
                    <option value="floridablanca">Floridablanca (Santander)</option>
                    <option value="barrancabermeja">Barrancabermeja (Santander)</option>
                    <option value="ibague">Ibagué (Tolima)</option>
                    <option value="espinal">Espinal (Tolima)</option>
                    <option value="melgar">Melgar (Tolima)</option>
                    <option value="cali">Cali (Valle del Cauca)</option>
                    <option value="palmira">Palmira (Valle del Cauca)</option>
                    <option value="buenaventura">Buenaventura (Valle del Cauca)</option>
                    <option value="tulua">Tuluá (Valle del Cauca)</option>
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
            <label for="fecha-ingreso">FECHA DE INGRESO</label>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="sel2">DIA</label>
                <select class="form-control" id="sel2">
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
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="sel3">MES</label>
                <select class="form-control" id="sel3">
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
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="sel4">AÑO</label>
                <select class="form-control" id="sel4">
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
                </select>
            </div>
        </div>

        <div class="row">
            <label for="fecha-ingreso">FECHA DE RETIRO</label>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="sel2">DIA</label>
                <select class="form-control" id="sel2">
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
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="sel3">MES</label>
                <select class="form-control" id="sel3">
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
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="sel4">AÑO</label>
                <select class="form-control" id="sel4">
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
                </select>
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
                    <option value="co">Colombia</option>
                    <option value="ar">Argentina</option>
                    <option value="br">Brasil</option>
                    <option value="cl">Chile</option>
                    <option value="mx">México</option>
                    <option value="es">España</option>
                    <option value="us">Estados Unidos</option>
                    <option value="fr">Francia</option>
                    <option value="de">Alemania</option>
                    <option value="it">Italia</option>
                    <option value="uk">Reino Unido</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="departamento-empresa">DEPARTAMENTO</label>
                <select class="form-control" name="departamento_empresa-anterior" id="departamento_empresa-anterior">
                    <option value="" disabled selected>Selecciona tu departamento</option>
                    <option value="amazonas">Amazonas</option>
                    <option value="antioquia">Antioquia</option>
                    <option value="arauca">Arauca</option>
                    <option value="atlantico">Atlántico</option>
                    <option value="bolivar">Bolívar</option>
                    <option value="boyaca">Boyacá</option>
                    <option value="caldas">Caldas</option>
                    <option value="caqueta">Caquetá</option>
                    <option value="casanare">Casanare</option>
                    <option value="cauca">Cauca</option>
                    <option value="cesar">Cesar</option>
                    <option value="choco">Chocó</option>
                    <option value="cordoba">Córdoba</option>
                    <option value="cundinamarca">Cundinamarca</option>
                    <option value="guainia">Guainía</option>
                    <option value="guaviare">Guaviare</option>
                    <option value="huila">Huila</option>
                    <option value="la_guajira">La Guajira</option>
                    <option value="magdalena">Magdalena</option>
                    <option value="meta">Meta</option>
                    <option value="narino">Nariño</option>
                    <option value="norte_santander">Norte de Santander</option>
                    <option value="putumayo">Putumayo</option>
                    <option value="quindio">Quindío</option>
                    <option value="risaralda">Risaralda</option>
                    <option value="san_andres">San Andrés y Providencia</option>
                    <option value="santander">Santander</option>
                    <option value="sucre">Sucre</option>
                    <option value="tolima">Tolima</option>
                    <option value="valle_cauca">Valle del Cauca</option>
                    <option value="vaupes">Vaupés</option>
                    <option value="vichada">Vichada</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="municipio-empresa">MUNICIPIO</label>
                <select class="form-control" name="ciudad-empresa-anterior" id="ciudad-empresa-anterior">
                    <option value="" disabled selected>Selecciona tu ciudad</option>
                    <option value="leticia">Leticia (Amazonas)</option>
                    <option value="medellin">Medellín (Antioquia)</option>
                    <option value="bello">Bello (Antioquia)</option>
                    <option value="itagui">Itagüí (Antioquia)</option>
                    <option value="envigado">Envigado (Antioquia)</option>
                    <option value="barranquilla">Barranquilla (Atlántico)</option>
                    <option value="soledad">Soledad (Atlántico)</option>
                    <option value="malambo">Malambo (Atlántico)</option>
                    <option value="sabanalarga">Sabanalarga (Atlántico)</option>
                    <option value="cartagena">Cartagena (Bolívar)</option>
                    <option value="magangue">Magangué (Bolívar)</option>
                    <option value="turbo">Turbaco (Bolívar)</option>
                    <option value="tunja">Tunja (Boyacá)</option>
                    <option value="duitama">Duitama (Boyacá)</option>
                    <option value="sogamoso">Sogamoso (Boyacá)</option>
                    <option value="manizales">Manizales (Caldas)</option>
                    <option value="villamaria">Villamaría (Caldas)</option>
                    <option value="la_dorada">La Dorada (Caldas)</option>
                    <option value="popayan">Popayán (Cauca)</option>
                    <option value="santander_quilichao">Santander de Quilichao (Cauca)</option>
                    <option value="guapi">Guapi (Cauca)</option>
                    <option value="valledupar">Valledupar (Cesar)</option>
                    <option value="aguachica">Aguachica (Cesar)</option>
                    <option value="bosconia">Bosconia (Cesar)</option>
                    <option value="monteria">Montería (Córdoba)</option>
                    <option value="lorica">Lorica (Córdoba)</option>
                    <option value="cerete">Cereté (Córdoba)</option>
                    <option value="bogota">Bogotá (Cundinamarca)</option>
                    <option value="soacha">Soacha (Cundinamarca)</option>
                    <option value="chia">Chía (Cundinamarca)</option>
                    <option value="neiva">Neiva (Huila)</option>
                    <option value="pitalito">Pitalito (Huila)</option>
                    <option value="garzon">Garzón (Huila)</option>
                    <option value="santa_marta">Santa Marta (Magdalena)</option>
                    <option value="ciudad_libertad">Ciénaga (Magdalena)</option>
                    <option value="plato">Plato (Magdalena)</option>
                    <option value="villavicencio">Villavicencio (Meta)</option>
                    <option value="granada_meta">Granada (Meta)</option>
                    <option value="acacias">Acacías (Meta)</option>
                    <option value="cucuta">Cúcuta (Norte de Santander)</option>
                    <option value="ocana">Ocaña (Norte de Santander)</option>
                    <option value="pamplona">Pamplona (Norte de Santander)</option>
                    <option value="armenia">Armenia (Quindío)</option>
                    <option value="calarca">Calarcá (Quindío)</option>
                    <option value="montenegro">Montenegro (Quindío)</option>
                    <option value="pereira">Pereira (Risaralda)</option>
                    <option value="dosquebradas">Dosquebradas (Risaralda)</option>
                    <option value="santa_rosa_cabral">Santa Rosa de Cabal (Risaralda)</option>
                    <option value="bucaramanga">Bucaramanga (Santander)</option>
                    <option value="floridablanca">Floridablanca (Santander)</option>
                    <option value="barrancabermeja">Barrancabermeja (Santander)</option>
                    <option value="ibague">Ibagué (Tolima)</option>
                    <option value="espinal">Espinal (Tolima)</option>
                    <option value="melgar">Melgar (Tolima)</option>
                    <option value="cali">Cali (Valle del Cauca)</option>
                    <option value="palmira">Palmira (Valle del Cauca)</option>
                    <option value="buenaventura">Buenaventura (Valle del Cauca)</option>
                    <option value="tulua">Tuluá (Valle del Cauca)</option>
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
            <label for="fecha-ingreso">FECHA INGRESO</label>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="sel2">DIA</label>
                <select class="form-control" id="sel2">
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
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="sel3">MES</label>
                <select class="form-control" id="sel3">
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
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="sel4">AÑO</label>
                <select class="form-control" id="sel4">
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
                </select>
            </div>
        </div>

        <div class="row">
            <label for="fecha-ingreso">FECHA DE RETIRO</label>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="sel2">DIA</label>
                <select class="form-control" id="sel2">
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
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="sel3">MES</label>
                <select class="form-control" id="sel3">
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
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="sel4">AÑO</label>
                <select class="form-control" id="sel4">
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
                </select>
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
</body>

</html>