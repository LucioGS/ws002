<?php
 
	$mbd = new PDO('mysql:host=localhost;dbname=cine', 'root', '');
	$usuarios = $mbd->query('SELECT * FROM usuarios');
	$array = $usuarios->fetchAll(PDO::FETCH_ASSOC);
    respuesta(200, "OK", $array);

    function respuesta($estado, $mensaje_estado, $datos){
		
		header("Content-Type:application/json");
        header("HTTP/1.1 $estado $mensaje_estado");
        $respuesta['estado'] = $estado;
        $respuesta['mensaje_estado'] = $mensaje_estado;
        $respuesta['datos'] = $datos;
        $respuesta_json = json_encode($respuesta);
        echo $respuesta_json;
		
    }
  
?>