$(document).ready(function(){
	Carga();
});

function Carga(){//esta funcion es para llenar la tabla
	var tablaDatos = $("#datos");
	var route = "/escuelas";

	$("#datos").empty();
	var con=1;
	$.get(route, function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+con+"</td>"+"<td>"+value.nomesc+"</td><td>"+value.nomdirec+"</td><td>"+value.telesc+"</td><td>"+value.diresc+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-info btn-sm' data-toggle='modal' data-target='#myModal'>Modificar</button></td><td><button class='btn btn-primary btn-sm' value="+value.id+" OnClick='Estados(this);'>Activo</button></td></tr>");
		con++;
		});
	});
}

function Mostrar(btn){//aqui es para que los cargu en la ventana modal los datos a modificar
	var route = "/escuela/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#idescuela").val(res.id);
		$("#nomesc").val(res.nomesc);
		$("#nomdirec").val(res.nomdirec);
		$("#telesc").val(res.telesc);
		$("#diresc").val(res.diresc);

		
	});
}

$("#actualizar").click(function(){
	var value = $("#idescuela").val();//recupera los datos del html
	var dnomesc= $("#nomesc").val();
	var dnomdirec= $("#nomdirec").val();
	var dtelesc= $("#telesc").val();
	var ddiresc= $("#diresc").val();
	var route = "/escuela/"+value+"";
	var token = $("#token").val();//aqui recupero de mi variable toque para decirle a laravel no es intencionada
	var data ='nomesc='+dnomesc+'&nomdirec='+dnomdirec+'&telesc='+dtelesc+'&diresc='+ddiresc;//cuidadito esto espara poder guardar en la base de datos
	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: data,
		success: function(){
			Carga();

			$("#myModal").modal('toggle');// se oculte la ventana modal despues de haber actualizado
			$("#msj-success").fadeIn();//me muestra un msj que se actualizado para que lo note el usuario
		}
	});
});

function Estados(btn){//aqui es para que los cargu en la ventana modal los datos a modificar
	var route = "/escuela/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#idescuela").val(res.id);
		$("#nomesc").val(res.nomesc);
		$("#nomdirec").val(res.nomdirec);
		$("#telesc").val(res.telesc);
		$("#diresc").val(res.diresc);

		
	});
}



