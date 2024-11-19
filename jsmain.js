(function () {
    paises = Array();
    municipios = Array();
})();

function cargaInicial() {
    const url = "https://restcountries.com/v3.1/all";

    fetch(url)
        .then(response => response.json())
        .then(data => obtenerPaises(data));

    const url2 = "https://raw.githubusercontent.com/marcovega/colombia-json/master/colombia.min.json";

    fetch(url2)
        .then(response => response.json())
        .then(data => obtenerMunicpios(data));


    llenarDias();
    llenarMeses();
    llenarAños();

}

function obtenerMunicpios(data) {
    //console.log("mostrando municpios");
    //console.log(data);
}

function obtenerPaises(data) {
    //console.log(data);
    //console.log("tamano :" + data.length);
    let index = 0;
    data.forEach(element => {
        let pais = {
            id: index,
            name: element.name.common,
            region: element.region,
            continente: element.continents[0]
        };

        if (pais.name != "Suriname" && pais.name != "French Guiana" && pais.name != "Falkland Islands") {
            paises[index] = pais;
            paises.push(pais);
            index += 1;
        }
    });
    //console.log(`la cantidad de paises son: ${paises.length} `);
    //console.log(paises);

    const paisesF = paises.filter(e => e.continente == "South America");

    //console.log(`la cantidad de paises filtrados son: ${paisesF.length} `);
    //console.log(paisesF);

    //adicionar valores al select
    let select = document.getElementById("paisesNacionalidad");
    let select1 = document.getElementById("pais-nacimiento");
    let select2 = document.getElementById("pais-correspondencia");
    paisesF.forEach(e => {
        option = new Option(e.name, e.id);
        option1 = new Option(e.name, e.id);
        option2 = new Option(e.name, e.id);
        select.appendChild(option);
        select1.appendChild(option1);
        select2.appendChild(option2);
    });


}
function llenarDias() {
    let selectDia = document.getElementById("dia-nacimiento");
    for (let i = 1; i <= 31; i++) {
        option = new Option(i, i);
        selectDia.appendChild(option);
    }
}

function llenarMeses() {
    let selectMeses = document.getElementById("mes-nacimiento");
    //let selectMeses1 = document.getElementById("mes-grado");
    const meses = ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE",
        "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"];
    meses.forEach((mes, index) => {
        let option = new Option(mes, index + 1);
        let option1 = new Option(mes, index + 1);
        selectMeses.appendChild(option)
        //selectMeses1.appendChild(option1)
    });
}

function llenarAños() {
    let selectAño = document.getElementById("anio-nacimiento");
    for (let i = 1940; i <= 2005; i++) {
        option = new Option(i, i);
        selectAño.appendChild(option)
    }
}

function llenarAñosGrado() {
    let selectAño = document.getElementById("anio-nacimiento");
    for (let i = 1940; i <= 2005; i++) {
        option = new Option(i, i);
        selectAño.appendChild(option)
    }
}


function previsualizar() {
    let $html = formatearHTML();
    agregarPrevisualizacion($html);
}



function agregarPrevisualizacion($html) {
    document.getElementById("contenedorPrevisualizacion").innerHTML += $html;
}

function formatearHTML() {


    let nuevo_html = `
    <div class=" row">
            <div class="col-sm-12">
                <h2>DATOS PERSONALES</h2>
            </div>

        </div>

        <div class="row">
            <div class="form-group">
                <label for="p-apellido">PRIMER APELLIDO</label>
                <p>${document.getElementById('primer-apellido').value}</p>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="p-apellido">SEGUNDO APELLIDO ( O DE CASADA )</label>
                <p>${document.getElementById('segundo-apellido').value}</p>

            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="p-nombre">NOMBRES</label>
                <p>${document.getElementById('nombres').value}</p>

            </div>
        </div>


        <div class="row">
            <div class="form-group">
                <label for="doc">DOCUMENTO DE IDENTIFICACIÓN</label>

                
                <p>${document.getElementById('documento-identificacion').value}</p>


                <div class="form-group">
                    <label for="num-doc">NUMERO DE DOCUMENTO</label>
                    <p>${document.getElementById('numero-documento').value}</p>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="num-doc">Genero</label>
                <p>${document.getElementById('genero').value}</p>

            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="nacionalidad">NACIONALIDAD</label>
                <p>${document.getElementById('nacionalidad').value}</p>


                <label for="pais">PAIS</label>

                <p>${document.getElementById('paisesNacionalidad').value}</p>
            </div>
        </div>


        <div class="row">
            <div class="form-group">
                <label for="lib-militar">LIBRETA MILITAR</label>

                <label for="lib-militar">CLASE DE LIBRETA</label>

                <p>${document.getElementById('clase-libreta').value}</p>

                <label for="num-libreta">NUMERO</label>
                <p>${document.getElementById('numero-libreta').value}</p>

                <label for="num-libreta">DISTRITO MILITAR</label>
                <p>${document.getElementById('dm-libreta').value}</p>
            </div>

        </div>

        <div class="row">
            <div class="form-group">
                <label for="fecha-lugar-nacimiento">FECHA Y LUGAR DE NACIMIENTO</label>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="dia-nacimiento">DIA</label>

                <p>${document.getElementById('dia-nacimiento').value}</p>

            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="mes-nacimiento">MES</label>
                <p>${document.getElementById('mes-nacimiento').value}</p>

            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="anio-nacimiento">AÑO</label>
                <p>${document.getElementById('anio-nacimiento').value}</p>

            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="pais-nacimiento">PAIS DE NACIMIENTO</label>
                
                <p>${document.getElementById('pais-nacimiento').value}</p>

            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="departamento-nacimiento">DEPARTAMENTO DE NACIMIENTO</label>
                    
                <p>${document.getElementById('departamento-nacimiento').value}</p>

            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="ciudad-nacimiento">CIUDAD DE NACIMIENTO</label>
                    <p>${document.getElementById('ciudad-nacimiento').value}</p>
            </div>

        </div>

        <div class="row">
            <div class="form-group">
                <label for="direccion-correspondencia">DIRECCIÓN DE CORRESPONDENCIA</label>
                <p>${document.getElementById('direccion-correspondencia').value}</p>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="pais-correspondencia">PAIS DE CORRESPONDENCIA</label>
                
                <p>${document.getElementById('pais-correspondencia').value}</p>

            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="departamento-correspondencia">DEPARTAMENTO DE CORRESPONDENCIA</label>
                 <p>${document.getElementById('departamento-correspondencia').value}</p> 

            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="ciudad-correspondencia">CIUDAD DE CORRESPONDENCIA</label>
                <p>${document.getElementById('ciudad-correspondencia').value}</p> 

            </div>

        </div>

        <div class="row">
            <div class="form-group">
                <label for="telefono">TELEFONO</label>
                <p>${document.getElementById('telefono').value}</p> 

            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="email">EMAIL</label>
                <p>${document.getElementById('email').value}</p> 

            </div>
        </div>
        `;

    return nuevo_html;
}