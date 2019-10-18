var ruta = "http://172.30.173.30/index/integra/api/";

function registro()
{
    var usuario=$("#usuario").val();
    var correo=$("#correo").val();
    var contrasena=$("#contrasena").val();

    if(correo=='' && contrasena=='' && usuario=='')
		$("#alerta").html('Ingrese todos los datos');
	else
	{
		$.ajax({
			type: "POST",
			url: ruta + "usuario/crea.php",
			data: {
                usuario_nombre: usuario,
				usuario_correo: correo,
				usuario_contrasena: contrasena
			},
			success: function(response)
			{
				if(response==1)
				{
					window.location="general.php";
					//alert("Funciona");
				}
				else
				{
					$("#alerta").text("Correo o contraseña incorrecto");
				}
			},
			error: function()
			{
				$("#alerta").text("No se pudo conectar con el servidor");
			}
		});
	}

}

function login()
{
	var correo=$("#icorreo").val();
	var contrasena=$("#icontrasena").val();

	if(correo=='' || contrasena=='')
		$("#alerta").html('Ingrese todos los datos');
	else
	{
		$.ajax({
			type: "POST",
			url: ruta + "sesion/login.php",
			data: {
				usuario_correo: correo,
				usuario_contrasena: contrasena
			},
			success: function(response)
			{
				if(response==1)
				{
					//window.location="general.php";
					//alert("Funciona");
				}
				else
				{
					$("#alerta").text("Correo o contraseña incorrecto");
				}
			},
			error: function()
			{
				$("#alerta").text("No se pudo conectar con el servidor");
			}
		});
	}
}