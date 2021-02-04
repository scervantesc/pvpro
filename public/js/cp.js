function sendcode(){
        var cp = document.getElementById("postcode").value;
        var endpoint_sepomex  = "http://api-sepomex.hckdrk.mx/query/";
		var method_sepomex = 'info_cp/';
		var urls = endpoint_sepomex + method_sepomex + cp ;
		$.ajax({
            url: urls,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
            	//console.log(data);
                //document.getElementById("province").value = data[0]["response"]["estado"];
                $("#province").val(data[0]["response"]["estado"]);
                //document.getElementById("city").value = data[0]["response"]["municipio"];
                $("#city").val(data[0]["response"]["municipio"]);
                document.getElementById("suburb").focus();
            },
            error: function (xhr, textStatus, errorThrown) {
            	alert('Codigo postal incorrecto');
            	document.getElementById("postcode").focus();
            }
        });
	}