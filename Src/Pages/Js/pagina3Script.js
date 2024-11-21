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
    fetch('guardarContratoActual.php', {
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
    fetch('guardarEmpleoAnterior.php', {
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

