function guardarEducacionBasica() {
    var form = document.getElementById("educacionBasica");
    var formData = new FormData(form);

    // Verificar los datos que se están enviando
    for (var pair of formData.entries()) {
        console.log(pair[0] + ': ' + pair[1]);
    }

    fetch('../Php/guardarEducacionBasica.php', {
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

function guardarEducacionSuperior() {
    // Obtener el formulario
    var form = document.getElementById("formularioEducacionSuperior");

    // Crear un objeto FormData para capturar los datos del formulario
    var formData = new FormData(form);

    // Verificar los datos que se están enviando
    for (var pair of formData.entries()) {
        console.log(pair[0] + ': ' + pair[1]);
    }

    // Enviar los datos usando Fetch API
    fetch('../Php/guardarEducacionSuperior.php', {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())  // Parsear la respuesta como JSON
        .then(data => {
            // Verificar si la respuesta es exitosa
            if (data.status === "success") {
                alert("Datos guardados correctamente");
                cargarDatosEducacionSuperior();
            } else {
                alert("Error al guardar datos: " + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema con la solicitud');
        });
}

function guardarIdioma() {
    // Obtener el formulario
    var form = document.getElementById("formularioIdioma");

    // Crear un objeto FormData para capturar los datos del formulario
    var formData = new FormData(form);

    // Verificar los datos que se están enviando
    for (var pair of formData.entries()) {
        console.log(pair[0] + ': ' + pair[1]);
    }

    // Enviar los datos usando Fetch API
    fetch('../Php/guardarIdioma.php', {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())  // Parsear la respuesta como JSON
        .then(data => {
            // Verificar si la respuesta es exitosa
            if (data.status === "success") {
                alert("Datos guardados correctamente");
                cargarDatosIdiomas();
            } else {
                alert("Error al guardar datos: " + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema con la solicitud');
        });
}

function cargarDatosEducacion() {
    fetch('../Php/obtenerEducacionBasica.php', { method: 'GET' })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                const educacion = data.data;

                // Llenar el select de grado escolar
                if (educacion.ultimoAnioCursado) {
                    const selectGrado = document.querySelector('[name="grado-escolar"]');
                    selectGrado.value = educacion.ultimoAnioCursado; // Seleccionar el grado correspondiente
                }

                // Llenar el select de título obtenido
                if (educacion.tituloObtenido) {
                    const selectTitulo = document.querySelector('[name="titulo-obtenido"]');
                    selectTitulo.value = educacion.tituloObtenido; // Seleccionar el título correspondiente
                }

                // Llenar el campo de fecha de grado
                if (educacion.fechaGrado) {
                    const inputFechaGrado = document.querySelector('[name="fecha-grado"]');
                    inputFechaGrado.value = educacion.fechaGrado; // Establecer la fecha
                }
            } else {
                //alert("Error al cargar los datos de educación: " + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema al cargar los datos de la educación básica y media.');
        });
}

document.addEventListener("DOMContentLoaded", cargarDatosEducacion);

function cargarDatosEducacionSuperior() {
    fetch('../Php/obtenerEducacionSuperior.php', { method: 'GET' })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                const educacion = data.data;

                // Obtener el cuerpo de la tabla
                const tbody = document.querySelector('table tbody');

                tbody.innerHTML = '';

                educacion.forEach((registro, index) => {
                    // Crear una nueva fila
                    const fila = document.createElement('tr');

                    // Generar las opciones de semestres aprobados
                    let semestresOptions = '';
                    for (let i = 1; i <= 12; i++) {
                        semestresOptions += `<option value="${i}" ${registro.semestresAprovados == i ? 'selected' : ''}>${i}</option>`;
                    }

                    fila.innerHTML = `
                        <td>
                            <select class="form-control" name="nivel_educativo" id="nivel_educativo${index}">
                                <option value="" disabled selected>Selecciona el nivel educativo</option>
                                <option value="tc" ${registro.modalidad == 'tc' ? 'selected' : ''}>TC (Técnica)</option>
                                <option value="tl" ${registro.modalidad == 'tl' ? 'selected' : ''}>TL (Tecnológica)</option>
                                <option value="te" ${registro.modalidad == 'te' ? 'selected' : ''}>TE (Tecnológica Especializada)</option>
                                <option value="un" ${registro.modalidad == 'un' ? 'selected' : ''}>UN (Universitaria)</option>
                                <option value="es" ${registro.modalidad == 'es' ? 'selected' : ''}>ES (Especialización)</option>
                                <option value="mg" ${registro.modalidad == 'mg' ? 'selected' : ''}>MG (Maestría o Magíster)</option>
                                <option value="doc" ${registro.modalidad == 'doc' ? 'selected' : ''}>DOC (Doctorado o PhD)</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="semestres-aprobados" id="semestres-aprobados${index}">
                                <option value="" disabled selected>Seleccionar</option>
                                ${semestresOptions}
                            </select>
                        </td>
                        <td>
                            <div class="radio">
                                <label><input type="radio" id="graduado${index}" name="graduado${index}" value="1" ${registro.graduado == 1 ? 'checked' : ''}> Si</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" id="graduado${index}" name="graduado${index}" value="0" ${registro.graduado == 0 ? 'checked' : ''}> No</label>
                            </div>
                        </td>
                        <td>
                            <select class="form-control" name="carrera" id="carrera${index}">
                                <option value="" disabled selected>Selecciona tu carrera</option>
                                <option value="ingenieria_sistemas" ${registro.nombreTitulo == 'ingenieria_sistemas' ? 'selected' : ''}>Ingeniería de Sistemas</option>
                                <option value="ingenieria_civil" ${registro.nombreTitulo == 'ingenieria_civil' ? 'selected' : ''}>Ingeniería Civil</option>
                                <option value="ingenieria_electronica" ${registro.nombreTitulo == 'ingenieria_electronica' ? 'selected' : ''}>Ingeniería Electrónica</option>
                                <option value="ingenieria_industrial" ${registro.nombreTitulo == 'ingenieria_industrial' ? 'selected' : ''}>Ingeniería Industrial</option>
                                <option value="medicina" ${registro.nombreTitulo == 'medicina' ? 'selected' : ''}>Medicina</option>
                                <option value="enfermeria" ${registro.nombreTitulo == 'enfermeria' ? 'selected' : ''}>Enfermería</option>
                                <option value="derecho" ${registro.nombreTitulo == 'derecho' ? 'selected' : ''}>Derecho</option>
                                <option value="administracion_empresas" ${registro.nombreTitulo == 'administracion_empresas' ? 'selected' : ''}>Administración de Empresas</option>
                                <option value="contaduria_publica" ${registro.nombreTitulo == 'contaduria_publica' ? 'selected' : ''}>Contaduría Pública</option>
                                <option value="arquitectura" ${registro.nombreTitulo == 'arquitectura' ? 'selected' : ''}>Arquitectura</option>
                                <option value="psicologia" ${registro.nombreTitulo == 'psicologia' ? 'selected' : ''}>Psicología</option>
                                <option value="comunicacion_social" ${registro.nombreTitulo == 'comunicacion_social' ? 'selected' : ''}>Comunicación Social</option>
                                <option value="economia" ${registro.nombreTitulo == 'economia' ? 'selected' : ''}>Economía</option>
                                <option value="ciencias_politicas" ${registro.nombreTitulo == 'ciencias_politicas' ? 'selected' : ''}>Ciencias Políticas</option>
                                <option value="diseño_grafico" ${registro.nombreTitulo == 'diseño_grafico' ? 'selected' : ''}>Diseño Gráfico</option>
                                <option value="educacion" ${registro.nombreTitulo == 'educacion' ? 'selected' : ''}>Educación</option>
                                <option value="quimica" ${registro.nombreTitulo == 'quimica' ? 'selected' : ''}>Química</option>
                                <option value="biologia" ${registro.nombreTitulo == 'biologia' ? 'selected' : ''}>Biología</option>
                                <option value="fisica" ${registro.nombreTitulo == 'fisica' ? 'selected' : ''}>Física</option>
                                <option value="matematicas" ${registro.nombreTitulo == 'matematicas' ? 'selected' : ''}>Matemáticas</option>
                            </select>
                        </td>
                        <td><input type="date" class="form-control" name="fecha-grado-superior" value="${registro.fechaTerminacion}" /></td>
                        <td><input type="text" class="form-control" name="num_tarjeta_profesional" value="${registro.numeroTarjetaProfesional}" /></td>
                    `;

                    // Agregar la fila a la tabla
                    tbody.appendChild(fila);
                });
            } else {
                //alert("Error al cargar los datos de educación superior: " + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema al cargar los datos de educación superior.');
        });
}

// Ejecutar la función cuando la página cargue
document.addEventListener("DOMContentLoaded", cargarDatosEducacionSuperior);

function cargarDatosIdiomas() {
    fetch('../Php/obtenerIdiomas.php', { method: 'GET' })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                const idiomas = data.data;

                const tbody = document.querySelector('#tablaIdiomas tbody');

                tbody.innerHTML = '';

                idiomas.forEach((idioma, index) => {
                    const fila = document.createElement('tr');

                    // Opciones de idiomas
                    let idiomaOptions = `
                        <option value="" disabled selected>Selecciona tu idioma</option>
                        <option value="espanol" ${idioma.idioma === 'espanol' ? 'selected' : ''}>Español</option>
                        <option value="ingles" ${idioma.idioma === 'ingles' ? 'selected' : ''}>Inglés</option>
                        <option value="frances" ${idioma.idioma === 'frances' ? 'selected' : ''}>Francés</option>
                        <option value="aleman" ${idioma.idioma === 'aleman' ? 'selected' : ''}>Alemán</option>
                        <option value="italiano" ${idioma.idioma === 'italiano' ? 'selected' : ''}>Italiano</option>
                        <option value="portugues" ${idioma.idioma === 'portugues' ? 'selected' : ''}>Portugués</option>
                        <option value="chino_mandarin" ${idioma.idioma === 'chino_mandarin' ? 'selected' : ''}>Chino Mandarín</option>
                        <option value="japones" ${idioma.idioma === 'japones' ? 'selected' : ''}>Japonés</option>
                        <option value="ruso" ${idioma.idioma === 'ruso' ? 'selected' : ''}>Ruso</option>
                        <option value="arabe" ${idioma.idioma === 'arabe' ? 'selected' : ''}>Árabe</option>
                        <option value="hindu" ${idioma.idioma === 'hindu' ? 'selected' : ''}>Hindú</option>
                        <option value="coreano" ${idioma.idioma === 'coreano' ? 'selected' : ''}>Coreano</option>
                    `;

                    // Opciones de nivel
                    let nivelOptionsHabla = `
                        <option value="" disabled selected>Selecciona</option>
                        <option value="regular" ${idioma.habla === 'regular' ? 'selected' : ''}>Regular</option>
                        <option value="bien" ${idioma.habla === 'bien' ? 'selected' : ''}>Bien</option>
                        <option value="muy_bien" ${idioma.habla === 'muy_bien' ? 'selected' : ''}>Muy bien</option>
                    `;
                    let nivelOptionsLee = `
                        <option value="" disabled selected>Selecciona</option>
                        <option value="regular" ${idioma.lee === 'regular' ? 'selected' : ''}>Regular</option>
                        <option value="bien" ${idioma.lee === 'bien' ? 'selected' : ''}>Bien</option>
                        <option value="muy_bien" ${idioma.lee === 'muy_bien' ? 'selected' : ''}>Muy bien</option>
                    `;
                    let nivelOptionsEscribe = `
                        <option value="" disabled selected>Selecciona</option>
                        <option value="regular" ${idioma.escribe === 'regular' ? 'selected' : ''}>Regular</option>
                        <option value="bien" ${idioma.escribe === 'bien' ? 'selected' : ''}>Bien</option>
                        <option value="muy_bien" ${idioma.escribe === 'muy_bien' ? 'selected' : ''}>Muy bien</option>
                    `;

                    // Crear la fila con los select
                    fila.innerHTML = `
                            <td>
                                <select class="form-control" id="idioma${index}" name="idioma${index}">
                                    ${idiomaOptions}
                                </select>
                            </td>
                            <td>
                                <select class="form-control" id="nivel-habla-idioma${index}" name="nivel-habla-idioma${index}">
                                    ${nivelOptionsHabla}
                                </select>
                            </td>
                            <td>
                                <select class="form-control" id="nivel-lee-idioma${index}" name="nivel-lee-idioma${index}">
                                    ${nivelOptionsLee}
                                </select>
                            </td>
                            <td>
                                <select class="form-control" id="nivel-escribe-idioma${index}" name="nivel-escribe-idioma${index}">
                                    ${nivelOptionsEscribe}
                                </select>
                            </td>
                        `;



                    // Agregar la fila a la tabla
                    tbody.appendChild(fila);
                });
            } else {
                //alert("Error al cargar los datos de idiomas: " + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema al cargar los datos de idiomas.');
        });
}

// Ejecutar la función al cargar el DOM
document.addEventListener('DOMContentLoaded', cargarDatosIdiomas);







function llenarSemestresAprovados() {
    let selectSemestre = document.getElementById("semestres-aprobados");
    for (let i = 1; i <= 12; i++) {
        option = new Option(i, i);
        selectSemestre.appendChild(option);
    }
}

function cargaInicial(){
    llenarSemestresAprovados();
}
