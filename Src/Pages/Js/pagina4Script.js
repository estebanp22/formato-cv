document.addEventListener("DOMContentLoaded", function () {
    // Referencia al formulario
    const formularioTiempoExperiencia = document.getElementById("formularioTiempoExperiencia");

    // Función para guardar el tiempo de experiencia
    async function guardarTiempoExperiencia(event) {
        event.preventDefault(); // Evitar recarga de la página al enviar

        // Capturar los valores seleccionados en el formulario
        const aniosServidorPublico = document.getElementById("anios-servidor-publico").value || "";
        const mesesServidorPublico = document.getElementById("meses-servidor-publico").value || "";

        const aniosServidorPrivado = document.getElementById("anios-servidor-privado").value || "";
        const mesesServidorPrivado = document.getElementById("meses-servidor-privado").value || "";

        const aniosIndependiente = document.getElementById("anios-independiente").value || "";
        const mesesIndependiente = document.getElementById("meses-independiente").value || "";

        // Validar que todos los campos tengan valores
        if (
            !aniosServidorPublico ||
            !mesesServidorPublico ||
            !aniosServidorPrivado ||
            !mesesServidorPrivado ||
            !aniosIndependiente ||
            !mesesIndependiente
        ) {
            alert("Por favor completa todos los campos antes de enviar.");
            return;
        }

        // Crear un objeto con los datos del formulario
        const datosFormulario = {
            "anios-servidor-publico": aniosServidorPublico,
            "meses-servidor-publico": mesesServidorPublico,
            "anios-servidor-privado": aniosServidorPrivado,
            "meses-servidor-privado": mesesServidorPrivado,
            "anios-independiente": aniosIndependiente,
            "meses-independiente": mesesIndependiente,
        };

        try {
            const respuesta = await fetch("guardar_tiempo_experiencia.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(datosFormulario),
            });

            const resultado = await respuesta.json();

            if (resultado.status === "success") {
                alert("Datos guardados exitosamente.");
            } else {
                alert(`Error: ${resultado.message}`);
            }
        } catch (error) {
            console.error("Error al guardar los datos:", error);
            alert("Ocurrió un error al guardar los datos. Por favor, inténtalo nuevamente.");
        }
    }

    formularioTiempoExperiencia.addEventListener("submit", guardarTiempoExperiencia);
});




document.addEventListener("DOMContentLoaded", () => {
    cargarTiempoExperiencia();
    document.getElementById("formularioTiempoExperiencia").addEventListener("submit", guardarTiempoExperiencia);
});

function cargarTiempoExperiencia() {
    fetch("../Php/obtenerTiempoExperiencia.php")
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                llenarFormulario(data.data);
            } else {
                console.error("Error:", data.message);
            }
        })
        .catch(error => console.error("Error al cargar datos:", error));
}

function llenarFormulario(data) {
    document.getElementById("anios-servidor-publico").value = data.aniosSectorPublico || "";
    document.getElementById("meses-servidor-publico").value = data.mesesSectorPublico || "";
    document.getElementById("anios-servidor-privado").value = data.aniosSectorPrivado || "";
    document.getElementById("meses-servidor-privado").value = data.mesesSectorPrivado || "";
    document.getElementById("anios-independiente").value = data.aniosIndependiente || "";
    document.getElementById("meses-independiente").value = data.mesesIndependiente || "";

    calcularTotales();
}

function guardarTiempoExperiencia(event) {
    event.preventDefault();

    const datos = {
        "meses-servidor-publico": document.getElementById("meses-servidor-publico").value,
        "meses-servidor-privado": document.getElementById("meses-servidor-privado").value,
        "meses-independiente": document.getElementById("meses-independiente").value
    };

    fetch("../Php/guardarTiempoExperiencia.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(datos)
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                alert("Datos guardados exitosamente.");
            } else {
                console.error("Error:", data.message);
                alert("Error al guardar datos: " + data.message);
            }
        })
        .catch(error => console.error("Error:", error));
}

function calcularTotales() {
    const aniosTotales = 0;
    const mesesTotales =
        parseInt(document.getElementById("meses-servidor-publico").value || 0) +
        parseInt(document.getElementById("meses-servidor-privado").value || 0) +
        parseInt(document.getElementById("meses-independiente").value || 0);

    const totalAnos = Math.floor(mesesTotales / 12);
    const totalMeses = mesesTotales % 12;

    document.getElementById("anios-totales").textContent = totalAnos;
    document.getElementById("meses-totales").textContent = totalMeses;
}



function calcularTotal() {
    totalAnios = parseInt(document.getElementById('anios-servidor-publico').value) + parseInt(document.getElementById('anios-independiente').value) + parseInt(document.getElementById('anios-servidor-privado').value);
    totalMeses = parseInt(document.getElementById('meses-servidor-publico').value) + parseInt(document.getElementById('meses-independiente').value) + parseInt(document.getElementById('meses-servidor-privado').value);

    while(parseInt(totalMeses) >= 12){
        aux = parseInt(totalAnios) + 1;
        totalAnios = aux;
        aux2 = parseInt(totalMeses) - 12;
        totalMeses = aux2
    }
  
    document.getElementById("anios-totales").innerHTML = totalAnios;
    document.getElementById("meses-totales").innerHTML = totalMeses;
  }

  function cargaInicial() {
    llenarAnios();
    llenarMeses();
}

function llenarAnios(){
    configurarAnios("anios-servidor-publico");
    configurarAnios("anios-servidor-privado");
    configurarAnios("anios-independiente");
}

function configurarAnios(idAnios){
    let selectAnios = document.getElementById(idAnios);
    for (let i = 0; i <= 12; i++) {
        option = new Option(i, i);
        selectAnios.appendChild(option);
    }
}

function llenarMeses(){
    configurarMeses("meses-servidor-publico");
    configurarMeses("meses-servidor-privado");
    configurarMeses("meses-independiente");
}

function configurarMeses(idMeses){
    let selectMeses = document.getElementById(idMeses);
    for (let i = 0; i <= 11; i++) {
        option = new Option(i, i);
        selectMeses.appendChild(option);
    }
}