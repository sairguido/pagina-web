<?php 

class Paginas{
	
	public static function  enlacesPaginasModel($enlaces){


		if($enlaces == "noticias" || $enlaces == "Contacto"){

			$module =  "vistas/modulos/".$enlaces.".php";
		
		}

		else if($enlaces == "index"){

			$module =  "vistas/modulos/inicio.php";
		
		}

        else if($enlaces == "inicio"){

			$module =  "vistas/modulos/inicio.php";
		
		}

		else if($enlaces == "admi"){

			$module = "admin/core/app/layouts/layout.php";
			header('Location: '.$module);

		
		}

		else{

			$module =  "vistas/modulos/error404.php";

		}
		
		return $module;

	}

}

?>