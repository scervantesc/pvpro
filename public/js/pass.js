function showpass(){
		var cambio = document.getElementById("password");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	}

const $resultado = document.querySelector("#resultado");

fetch("https://api.exchangeratesapi.io/latest?base=USD&symbols=MXN")
    .then(respuesta => respuesta.json())
    .then(respuestaDecodificada => {
        const precioDolarHoyEnMXN = respuestaDecodificada.rates.MXN;
        $resultado.textContent = precioDolarHoyEnMXN;
    });