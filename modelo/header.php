<?php 

if (isset($_GET['action'])) {

	if ($_GET['action'] === 'inicio' || $_GET['action'] === 'index') {
		$title = 'Inicio';
	} elseif ($_GET['action'] === 'noticias') {
		$title = 'Noticias';
	} elseif ($_GET['action'] === 'Contacto') {
		$title = 'Contacto';
	} else {
		$title = 'error404';
	}
} else {
	$title = 'Inicio';
}


?>