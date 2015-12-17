function Mostrar(quemostrar)
{
	var funcionAjax = $.ajax({
	url: 'nexo.php',
	type: 'post',
	data:{queHacer: quemostrar}
	});
	funcionAjax.done(function(retorno)
	{
		$('#principal').html(retorno);
	});
		funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}

function validarLogin()
{
		var varNombre=$("#nombre").val();
		var varClase=$("#clase").val();
		var varClave=$("#clave").val();

	var funcionAjax=$.ajax({
		url:"php/validarMascota.php",
		type:"post",
		data:{
			nombre:varNombre,
			clase:varClase,
			clave:varClave}
		});
	funcionAjax.done(function(retorno){
		if(retorno=="No-esta"){
			alert("No se encuentra.");
			$("#nombre").html(retorno);
		}
		else{
			Mostrar('mostrarlogin');
			$("#BotonLogin").html("Ir a salir<br>-Sesión-");
			$("#BotonLogin").addClass("btn btn-danger");				
			$("#nombre").val("nombre: "+retorno);
		}
	});
	funcionAjax.fail(function(retorno){

	});
}//fin validarLogin

function deslogear()
{	
	var funcionAjax=$.ajax({
		url:"php/logout.php",
		type:"post",	
	});
	funcionAjax.done(function(retorno){
			//MostarBotones();
			Mostrar('mostrarlogin');
			$("#nombre").val("Sin nombre.");
			/*$("#BotonLogin").html("Login<br>-Sesión-");
			$("#BotonLogin").removeClass("btn-danger");
			$("#BotonLogin").addClass("btn-primary");	*/	
	});	
}//fin deslogear

function mostrarBotones()
{		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"mostrarBotones"}
	});
	funcionAjax.done(function(retorno){
		$("#botonesABM").html(retorno);
	});
}

