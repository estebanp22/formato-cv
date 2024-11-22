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
    let select1 = document.getElementById("pais-nacimiento");
    let select2 = document.getElementById("pais-correspondencia");
    paisesF.forEach(e => {
        option1 = new Option(e.name, e.id);
        option2 = new Option(e.name, e.id);
        select1.appendChild(option1);
        select2.appendChild(option2);
    });
}

function obtenerDepartamentosMunicpios(data) {
    //Extraer departamentos y municipios
    //console.log("Mostrando departamentos y municipios")
    data.forEach(departamento => {
        departamentos.push(departamento.departamento);
        municipios[departamento.departamento] = departamento.ciudades;
    });

    configurarDropdown("departamentoNacimiento", "municipioNacimiento");
    configurarDropdown("departamento-correspondencia", "municipio-correspondencia");

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



//-------------------------FUNCIONALIDADES-------------------------\\

function guardarPersona() {
    var form = document.getElementById("formularioPersona");
    var formData = new FormData(form);


    // Verificar los datos que se están enviando
    for (var pair of formData.entries()) {
        console.log(pair[0]+ ': ' + pair[1]);
    }

    fetch('../Php/guardarPersona.php', {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())
        .then(data => {
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


function guardarLibretaMilitar() {
    var form = document.getElementById("formulariolibreta");
    var formData = new FormData(form);

    // Verificar los datos que se están enviando
    for (var pair of formData.entries()) {
        console.log(pair[0] + ': ' + pair[1]);
    }

    fetch('../Php/guardarLibretaMilitar.php', {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())
        .then(data => {
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

function guardarDireccionCorrespondencia() {
    var form = document.getElementById("formularioCorrespondencia");
    var formData = new FormData(form);

    // Verificar los datos que se están enviando
    for (var pair of formData.entries()) {
        console.log(pair[0] + ': ' + pair[1]);
    }

    // Enviar los datos al servidor
    fetch('../Php/guardarCorrespondencia.php', {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert(data.message);  // Datos guardados correctamente
            } else {
                alert('Error: ' + data.message);  // Mostrar mensaje de error
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema con la solicitud');
        });
}

function cargarDatosPersona() {
    fetch('../Php/obtenerPersona.php', { method: 'GET' })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                const persona = data.data;

                // Llenar los campos de texto
                document.querySelector('[name="primerApellido"]').value = persona.primerApellido || '';
                document.querySelector('[name="segundoApellido"]').value = persona.segundoApellido || '';
                document.querySelector('[name="nombres"]').value = persona.nombres || '';
                document.querySelector('[name="numeroDocumento"]').value = persona.numeroDocumento || '';
                document.querySelector('[name="numeroDocumento"]').disabled = true; // Inhabilitar edición
                document.querySelector('[name="fechaNacimiento"]').value = persona.fechaNacimiento || '';
                document.querySelector('[name="paisNacimiento"]').value = persona.paisNacimiento || '';
                document.querySelector('[name="departamentoNacimiento"]').value = persona.departamentoNacimiento || '';
                document.querySelector('[name="municipioNacimiento"]').value = persona.municipioNacimiento || '';

                // Seleccionar radios de tipoDocumento
                if (persona.tipoDocumento) {
                    const radioTipoDoc = document.querySelector(`[name="tipoDocumento"][value="${persona.tipoDocumento}"]`);
                    if (radioTipoDoc) {
                        radioTipoDoc.checked = true;
                    }
                }

                // Seleccionar radios de género
                if (persona.genero) {
                    const radioGenero = document.querySelector(`[name="genero"][value="${persona.genero}"]`);
                    if (radioGenero) {
                        radioGenero.checked = true;
                    }
                }

                // Seleccionar radios de nacionalidad
                if (persona.paisNacimiento) {
                    const nacionalidad = persona.paisNacimiento === 'Colombia' ? 'col' : 'ext';
                    const radioNacionalidad = document.querySelector(`[name="nacionalidad"][value="${nacionalidad}"]`);
                    if (radioNacionalidad) {
                        radioNacionalidad.checked = true;
                    }
                }
            } else {
                //alert("Error al cargar datos: " + data.message);

            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema al cargar los datos.');
        });

}

function cargarDatosLibreta() {
    fetch('../Php/obtenerLibreta.php', { method: 'GET' })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                const libreta = data.data;

                // Llenar los campos de libreta militar
                document.querySelector('[name="numero-libreta"]').value = libreta.numero || '';
                document.querySelector('[name="dm-libreta"]').value = libreta.distritoMilitar || '';

                // Seleccionar radios de clase de libreta
                if (libreta.clase) {
                    const radioClase = document.querySelector(`[name="clase-libreta"][value="${libreta.clase}"]`);
                    if (radioClase) {
                        radioClase.checked = true;
                    }
                }
            } else {
                //alert("Error al cargar los datos de la libreta militar: " + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema al cargar los datos de la libreta militar.');
        });
}

function cargarDatosCorrespondencia() {
    fetch('../Php/obtenerDireccion.php', { method: 'GET' })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                const direccion = data.data;

                // Llenar los campos de dirección de correspondencia
                document.querySelector('[name="direccion-correspondencia"]').value = direccion.direccion || '';
                document.querySelector('[name="telefono"]').value = direccion.telefono || '';
                document.querySelector('[name="email"]').value = direccion.email || '';

                // Seleccionar el país
                if (direccion.pais) {
                    const selectPais = document.querySelector('[name="pais-correspondencia"]');
                    selectPais.value = direccion.pais; // Seleccionar el país correspondiente
                }

                // Seleccionar el departamento
                if (direccion.departamento) {
                    const selectDepartamento = document.querySelector('[name="departamento-correspondencia"]');
                    selectDepartamento.value = direccion.departamento; // Seleccionar el departamento correspondiente
                }

                // Seleccionar el municipio
                if (direccion.municipio) {
                    const selectMunicipio = document.querySelector('[name="municipio-correspondencia"]');
                    selectMunicipio.value = direccion.municipio; // Seleccionar el municipio correspondiente
                }
            } else {
                //alert("Error al cargar los datos de dirección: " + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema al cargar los datos de la dirección de correspondencia.');
        });
}

// Ejecutar la función cuando la página cargue
document.addEventListener("DOMContentLoaded", cargarDatosCorrespondencia);


// Ejecutar la función cuando la página cargue
document.addEventListener("DOMContentLoaded", cargarDatosLibreta);

// Ejecutar la función cuando la página cargue
document.addEventListener("DOMContentLoaded", cargarDatosPersona);

