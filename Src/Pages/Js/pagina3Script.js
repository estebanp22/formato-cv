function guardarExperienciaLaboral() {
    // Obtener el formulario
    var form = document.getElementById("formularioEmpleoActual");

    // Crear un objeto FormData para capturar los datos del formulario
    var formData = new FormData(form);

    // Verificar los datos que se están enviando (opcional para depuración)
    for (var pair of formData.entries()) {
        console.log(pair[0] + ': ' + pair[1]);
    }

    // Enviar los datos usando Fetch API
    fetch('../Php/guardarContratoActual.php', {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())  // Parsear la respuesta como JSON
        .then(data => {
            // Verificar si la respuesta es exitosa
            if (data.status === "success") {
                alert("Datos guardados correctamente");
            } else {
                alert("Error al guardar datos: " + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema con la solicitud');
        });
}

function guardarEmpleoAnterior() {
    // Obtener el formulario
    var form = document.getElementById("formularioEmpleoAnterior");

    // Crear un objeto FormData para capturar los datos del formulario
    var formData = new FormData(form);

    // Verificar los datos que se están enviando (opcional para depuración)
    for (var pair of formData.entries()) {
        console.log(pair[0] + ': ' + pair[1]);
    }

    // Enviar los datos usando Fetch API
    fetch('../Php/guardarEmpleoAnterior.php', {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())  // Parsear la respuesta como JSON
        .then(data => {
            // Verificar si la respuesta es exitosa
            if (data.status === "success") {
                alert("Datos guardados correctamente");
            } else {
                alert("Error al guardar datos: " + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema con la solicitud');
        });
}

(function () {
    paises = Array();
    municipios = Array();
    departamentos = Array();
})();

function cargaInicial() {
    const url = "https://restcountries.com/v3.1/all";

    fetch(url)
        .then(response => response.json())
        .then(data => obtenerPaises(data));

    const url2 = "https://raw.githubusercontent.com/marcovega/colombia-json/master/colombia.min.json";
    fetch(url2)
        .then(response => response.json())
        .then(data => obtenerDepartamentosMunicpios(data));
}

function obtenerPaises(data) {
    //console.log(data);
    //console.log("tamano :" + data.length);
    console.log("Mostrando paises")
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
    let select = document.getElementById("pais_empresa");
    let select1 = document.getElementById("pais_empresa_anterior")
    paisesF.forEach(e => {
        option = new Option(e.name, e.id);
        option1 = new Option(e.name, e.id);
        select.appendChild(option);
        select1.appendChild(option1);
    });
}

function obtenerDepartamentosMunicpios(data) {
    //Extraer departamentos y municipios
    //console.log("Mostrando departamentos y municipios")
    data.forEach(departamento => {
        departamentos.push(departamento.departamento);
        municipios[departamento.departamento] = departamento.ciudades;
    });

    configurarDropdown("departamento_empresa", "ciudad-empresa");
    configurarDropdown("departamento_empresa-anterior", "ciudad-empresa-anterior");
}
function configurarDropdown(idDepartamento, idMunicipio){
    //Dropdown de departamentos
    let selectDepartamento = document.getElementById(idDepartamento);
    let selectMunicipio = document.getElementById(idMunicipio);

    departamentos.forEach(depto =>{
        let option = new Option(depto, depto);
        selectDepartamento.appendChild(option);
    });
    //Municipios segun el departamento seleccionado
    selectDepartamento.addEventListener("change", function(){
        let selectDpto = this.value;
        //Quitar municipios anteriores
        selectMunicipio.innerHTML = '<option value="" disabled selected>Selecciona tu ciudad</option>';

        //Añadir los municipios del departamento seleccionado
        municipios[selectDpto].forEach(muni => {
            let option = new Option(muni, muni);
            selectMunicipio.appendChild(option);
        });

        selectMunicipio.disabled = false;
    });
}
