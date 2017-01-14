$(document).on('ready',constructor());
function constructor(){
SumarEntradas();
}
function SumarEntradas(){
	$('#ad').on('click','#cantcomp1, #preciocomp1',function (){
		var a=parseFloat($('#cantcomp1').val());
		var b=parseFloat($('#preciocomp1').val());
		
		if(isNaN(a)){
			a=1;
		}
		if(isNaN(a)){
			b=1;
		}
		var c= a*b;
		if(isNaN(c)){
			c=0;
		}
		$('#subtotalcomp').val(c);//Para colocar dentro del input

	});
}