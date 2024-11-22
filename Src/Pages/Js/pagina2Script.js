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

    // Verificar los datos que se están enviando (opcional para depuración)
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

    // Verificar los datos que se están enviando (opcional para depuración)
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
                alert("Error al cargar los datos de educación: " + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema al cargar los datos de la educación básica y media.');
        });
}

// Ejecutar la función cuando la página cargue
document.addEventListener("DOMContentLoaded", cargarDatosEducacion);

function cargarDatosEducacionSuperior() {
    fetch('../Php/obtenerEducacionSuperior.php', { method: 'GET' })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                const educacion = data.data;

                // Obtener el cuerpo de la tabla
                const tbody = document.querySelector('table tbody');

                // Limpiar cualquier fila existente
                tbody.innerHTML = '';

                // Recorrer cada registro de educación superior
                educacion.forEach((registro, index) => {
                    // Crear una nueva fila
                    const fila = document.createElement('tr');

                    // Agregar las celdas a la fila
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
                                <option value="1" ${registro.semestresAprovados == 1 ? 'selected' : ''}>1</option>
                                <option value="2" ${registro.semestresAprovados == 2 ? 'selected' : ''}>2</option>
                                <option value="3" ${registro.semestresAprovados == 3 ? 'selected' : ''}>3</option>
                                <option value="4" ${registro.semestresAprovados == 4 ? 'selected' : ''}>4</option>
                                <option value="5" ${registro.semestresAprovados == 5 ? 'selected' : ''}>5</option>
                                <option value="6" ${registro.semestresAprovados == 6 ? 'selected' : ''}>6</option>
                            </select>
                        </td>
                        <td>
                            <div class="radio">
                                <label><input type="radio" id="graduado${index}" name="graduado${index}" value="si" ${registro.graduado == 1 ? 'checked' : ''}> Si</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" id="graduado${index}" name="graduado${index}" value="no" ${registro.graduado == 0 ? 'checked' : ''}> No</label>
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

                    // Agregar la fila al cuerpo de la tabla
                    tbody.appendChild(fila);
                });
            } else {
                alert("Error al cargar los datos de educación superior: " + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema al cargar los datos de educación superior.');
        });
}

// Ejecutar la función cuando la página cargue
document.addEventListener("DOMContentLoaded", cargarDatosEducacionSuperior);





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
