<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    {!!Html::script('http://code.jquery.com/jquery-1.9.1.js')!!} 
    {!!Html::script('js/jquery.maskedinput-1.2.2.min.js')!!}
    {!!Html::script('js/jquery.maskedinput.js')!!}


    
    <style>
    div span {
        display:inline-block;
        width:250px;
    }
    h2 {
        font-size:1em;
    }
    input {
        padding:5px;
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        -o-border-radius: 5px;
    }
    input:focus {
        outline:0px;
    }
    .ok{
        border-color:blue;
    }
    </style>
 
    <script type="text/javascript">
        jQuery(function($){
            $("#numero1").mask("9,99", {
 
                // Generamos un evento en el momento que se rellena
                completed:function(){
                    $("#numero1").addClass("ok")
                }
            });
 
            // Definimos las mascaras para cada input
            $("#date").mask("99/99/9999");
            $("#movil").mask("9999-9999");
            $("#letras").mask("99999999");
            $("#DUI").mask("99999999-9");

            $("#comodines").mask("?");
        });
    </script>
</head>
 
<body>
<form action="">
<h1>Mascaras en los inputs</h1>
<h2>Aqui se muestra como utilizar el plugin de jquery maskedinput para poner mascaras en nuestros inputs.</h2>
 
<div><span>numero con dos decimales</span><input type="text" id="numero1"> 9,99 (generamos un evento al rellenarlo)</div>
<div><span>fecha</span><input type="text" id="date" > 99/99/9999</div>
<div><span>movil</span><input type="text" id="DUI"> 999 99 99 99</div>
<div><span>Solo tres letras</span><input type="text"  id="letras"> aaa</div>
<input type="submit" name="" value="hola">
</form>
 
<p><a href="http://digitalbush.com/projects/masked-input-plugin">http://digitalbush.com/projects/masked-input-plugin</a></p>
<p><a href="http://www.lawebdelprogramador.com">http://www.lawebdelprogramador.com</a></p>
</body>
</html>



