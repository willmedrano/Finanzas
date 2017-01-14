$(document).ready(function(){
	Carga();
});

/*function Carga(){//esta funcion es para llenar la tabla
	var tablaDatos = $("#datosempleado");
	var route = "/logs";

	$("#datosempleado").empty();
	var con=1;
	$.get(route, function(res){
		$(res).each(function(key,value){

			tablaDatos.append("<tr><td>"+con+"</td>"+"<td>"+value.nom+"</td><td>"+value.ape+"</td><td>"+value.tel+"</td><td>"+value.sex+"</td><td>"+value.cargo+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-info btn-sm'  div='#myModal'>Modificar</button></td></tr>");
		con++;

		                                                
		});
	});
}


function Mostrar(btn){//aqui es para que los cargu en la ventana modal los datos a modificar
	var route = "/log/"+btn.value+"/edit";

	$.get(route, function(res){
		//$("#idemp").val(res.id);
		//$("#lognom").val(res.nom);
		//$("#logape").val(res.ape);
		//$("#logtel").val(res.tel);
		//$("#logcorreo").val(res.sueldo);
		//$("#logusuario").val(res.cargo);

		//$("#tel").val(res.tel);
		
		//$("#sexo").val(res.sex);
		
		//$("#cargo").val(res.cargo);
		//$("#salario").val(res.sueldo);

		
	});
}*/
$("#llenar").OnClick(event => {
	$.get(`log/${event.target.value}`, function(res, sta){
		$("#town").empty();
		res.forEach(element => {
			$("#town").append(` <option value=${element.id}> ${element.name} </option>`);
		});
	});
});