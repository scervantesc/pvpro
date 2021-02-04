var hello = function() {

  let fecha = new Date();
  hora = fecha.getHours();

  if(hora >= 0 && hora < 12){
    texto = "BUENOS DIAS";
  }

  if(hora >= 12 && hora < 18){
    texto = "BUENAS TARDES";
  }

  if(hora >= 18 && hora < 24){
    texto = "BUENAS NOCHES";
  }

  document.getElementById('hello').textContent= texto;

}

hello();
setInterval(hello, 1000);