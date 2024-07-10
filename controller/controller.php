<?php

class MvcController{

	#LLAMADA A LA PLANTILLA
	#-------------------------------------

	public function pagina(){	
		
		include "vistas/template.php";
	
	}

	#ENLACES
	#-------------------------------------

	public function enlacesPaginasController(){

		if(isset( $_GET['action'])){
			
			$enlaces = $_GET['action'];
		
		}

		else if(isset( $_GET['admi'])){
			
			$enlaces = "admi";
		
		}

		else{

			$enlaces = "index";
		}
		$respuesta = Paginas::enlacesPaginasModel($enlaces);

		include $respuesta;

	}

}


	#formulario de contactos
	#------------------------------------
	error_reporting(0);
    if(isset($_POST["btnenviar"])){
        $nombre = (float)$_POST["nombre"];
        $correo = (float)$_POST["correo"];
        $telefono = (float)$_POST["telf"];
        $mensaje = (float)$_POST["message"];
    }

?>