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