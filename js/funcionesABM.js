function GuardarMascota()
{
		var id=$("#id").val();
		var nombre=$("#nombre").val();
		var clase=$("#clase").val();
		var clave=$("#clave").val();
		var tipo=$("#tipo").val();

		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"GuardarMascota",
			id:id,
			nombre:nombre,
			clase:clase,
			clave:clave,
			tipo:tipo
		}
	});
	funcionAjax.done(function(retorno){
		alert("Se registro correctamente!!");
		Mostrar('mostrarlogin');
		$("#informe").html("cantidad de agregados "+ retorno);
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}//fin GuardarMascota

function BorrarMascota(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarMascota",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar('TraerMascotas');
		//$("#informe").html("cantidad de eliminados "+ retorno);		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}//fin Borrarmascota

function EditarMascota(idParametro)
{
	//alert(idParametro);
	Mostrar('EditarMascota');
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerMascotasId",
			id:idParametro	
		     }
	});
		
	funcionAjax.done(function(retorno){
		var mascota =JSON.parse(retorno);
		//alert(retorno);
		$("#id").val(mascota.id);
		$("#nombre").val(mascota.nombre);
		$("#clase").val(mascota.clase);
		$("#clave").val(mascota.clave)
		$("#tipo").val(mascota.tipo);
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);
		alert("error");		
	});	
	
}//fin Editarmascota*/