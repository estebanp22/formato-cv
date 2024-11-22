function calcularTotal() {
    totalAnios = parseInt(document.getElementById('anios-servidor-publico').value) + parseInt(document.getElementById('anios-independiente').value) + parseInt(document.getElementById('anios-sector-privado').value);
    totalMeses = parseInt(document.getElementById('meses-servidor-publico').value) + parseInt(document.getElementById('meses-independiente').value) + parseInt(document.getElementById('meses-sector-privado').value);

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
    for (let i = 1; i <= 12; i++) {
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
    for (let i = 1; i <= 11; i++) {
        option = new Option(i, i);
        selectMeses.appendChild(option);
    }
}