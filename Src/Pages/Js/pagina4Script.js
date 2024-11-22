function guardarTiempoExperiencia() {
    // Capturar los valores de los campos
    const aniosServidorPublico = parseInt(document.getElementById("anios-servidor-publico").value || 0);
    const mesesServidorPublico = parseInt(document.getElementById("meses-servidor-publico").value || 0);
    const aniosServidorPrivado = parseInt(document.getElementById("anios-servidor-privado").value || 0);
    const mesesServidorPrivado = parseInt(document.getElementById("meses-servidor-privado").value || 0);
    const aniosIndependiente = parseInt(document.getElementById("anios-independiente").value || 0);
    const mesesIndependiente = parseInt(document.getElementById("meses-independiente").value || 0);

    // Calcular total de meses
    const totalMesesServidorPublico = (aniosServidorPublico * 12) + mesesServidorPublico;
    const totalMesesServidorPrivado = (aniosServidorPrivado * 12) + mesesServidorPrivado;
    const totalMesesIndependiente = (aniosIndependiente * 12) + mesesIndependiente;

    // Crear un objeto FormData para enviar los datos al servidor
    const formData = new FormData();
    formData.append("meses-servidor-publico", totalMesesServidorPublico);
    formData.append("meses-servidor-privado", totalMesesServidorPrivado);
    formData.append("meses-independiente", totalMesesIndependiente);

    // Verificar los datos que se enviarán
    console.log("Datos enviados:", Object.fromEntries(formData.entries()));

    // Enviar los datos al servidor
    fetch('../Php/guardarTiempoExperiencia.php', {
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