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


document.addEventListener('DOMContentLoaded', () => {
    cargarDatosExperiencia();  // Cargar los datos al cargar la página
});

// Función para cargar los datos de experiencia laboral
function cargarDatosExperiencia() {
    fetch('../Php/obtenerExperienciaActual.php', { method: 'GET' })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                const experiencia = data.data;

                // Llenar los campos de texto
                document.querySelector('[name="empresa-actual"]').value = experiencia.empresa || '';
                document.querySelector('[name="email-empresa"]').value = experiencia.correo || '';
                document.querySelector('[name="telefono-empresa"]').value = experiencia.telefono || '';
                document.querySelector('[name="fecha-ingreso"]').value = experiencia.fechaInicio || '';
                document.querySelector('[name="cargo_contrato"]').value = experiencia.cargo || '';
                document.querySelector('[name="dependencia"]').value = experiencia.dependencia || '';
                document.querySelector('[name="direccion"]').value = experiencia.direccion || '';

                // Seleccionar radios de tipo de empresa (se usa name y valores 'publica' y 'privada')
                if (experiencia.naturalezaJuridica) {
                    const radioTipoEmpresa = document.querySelector(`[name="tipo-empresa-actual"][value="${experiencia.naturalezaJuridica}"]`);
                    if (radioTipoEmpresa) {
                        radioTipoEmpresa.checked = true;
                    }
                }

                // Seleccionar valor para el select de Pais
                const paisSelect = document.getElementById('pais_empresa');
                if (paisSelect) {
                    paisSelect.value = experiencia.pais || '';  // Establece el valor del país
                }

                // Seleccionar valor para el select de Departamento
                const departamentoSelect = document.getElementById('departamento_empresa');
                if (departamentoSelect) {
                    departamentoSelect.value = experiencia.departamento || '';  // Establece el valor del departamento
                }

                // Seleccionar valor para el select de Municipio
                const municipioSelect = document.getElementById('ciudad-empresa');
                if (municipioSelect) {
                    municipioSelect.value = experiencia.municipio || '';  // Establece el valor del municipio
                }

            } else {
                alert("Error al cargar los datos de experiencia laboral: " + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema al cargar los datos.');
        });
}


document.addEventListener('DOMContentLoaded', () => {
    cargarDatosEmpleosAnteriores();  // Cargar los datos al cargar la página
});

// Función para cargar los datos de empleos anteriores
function cargarDatosEmpleosAnteriores() {
    fetch('../Php/obtenerEmpleosAnteriores.php', { method: 'GET' })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                const empleosAnteriores = data.data;

                // Llenar los campos dinámicamente para cada empleo anterior
                empleosAnteriores.forEach((empleo, index) => {
                    // Asignar un índice dinámico para cada grupo de campos
                    const idx = index + 1;  // Indice para los campos

                    // Asignar los valores a los campos con el índice correspondiente
                    document.getElementById(`empresa-anterior`).value = empleo.empresa;
                    document.querySelectorAll(`[name="tipo-empresa-anterior"]`)[empleo.naturalezaJuridica === 'publica' ? 0 : 1].checked = true;
                    setearSelect(`pais_empresa-anterior`, empleo.pais, idx);
                    setearSelect(`departamento_empresa-anterior`, empleo.departamento, idx);
                    setearSelect(`ciudad-empresa-anterior`, empleo.municipio, idx);
                    document.getElementById(`email-empresa-anterior`).value = empleo.correo;
                    document.getElementById(`telefono-empresa-anterior`).value = empleo.telefono;
                    document.getElementById(`fecha-ingreso-anterior`).value = formatFecha(empleo.fechaInicio);
                    document.getElementById(`fecha-fin-anterior`).value = formatFecha(empleo.fechaFin);
                    document.getElementById(`cargo_contrato-anterior`).value = empleo.cargo;
                    document.getElementById(`dependencia-anterior`).value = empleo.dependencia;
                    document.getElementById(`direccion-anterior`).value = empleo.direccion;
                });

            } else {
                alert("Error al cargar los datos de empleo anterior: " + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema al cargar los datos.');
        });
}

// Función para setear los selects por el valor de la base de datos y el índice
function setearSelect(selectId, valor, index) {
    const select = document.getElementById(`${selectId}-${index}`);
    if (select) {
        const options = Array.from(select.options);
        const option = options.find(option => option.value === valor);
        if (option) {
            option.selected = true;
        }
    }
}

// Función para formatear las fechas en formato dd/mm/yyyy
function formatFecha(fecha) {
    const fechaObj = new Date(fecha);
    const dia = String(fechaObj.getDate()).padStart(2, '0');
    const mes = String(fechaObj.getMonth() + 1).padStart(2, '0'); // Los meses comienzan en 0
    const año = fechaObj.getFullYear();
    return `${dia}/${mes}/${año}`;
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
    let select1 = document.getElementById("pais_empresa");
    let select2 = document.getElementById("pais_empresa-anterior");
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
