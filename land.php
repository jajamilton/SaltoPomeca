<?php

	if(isset($_GET['idk'])){
		if($_GET['idk']=="es"){
			require_once 'index.php';
		}elseif ($_GET['idk']=="in") {
			require_once 'indexIng.php';
		}

	}

	if(isset($_GET['idk2'])){
		if($_GET['idk2']=="es"){
			require_once 'Nosotros.php';
		}elseif ($_GET['idk2']=="in") {
			require_once 'NosotrosIng.php';
		}

	}
	if(isset($_GET['idk3'])){
		if($_GET['idk3']=="es"){
			require_once 'Galeria.php';
		}elseif ($_GET['idk3']=="in") {
			require_once 'GaleriaIng.php';
		}

	}
	if(isset($_GET['idk4'])){
		if($_GET['idk4']=="es"){
			require_once 'Servicios.php';
		}elseif ($_GET['idk4']=="in") {
			require_once 'ServiciosIng.php';
		}

	}
	if(isset($_GET['idk5'])){
		if($_GET['idk5']=="es"){
			require_once 'Contactenos.php';
		}elseif ($_GET['idk5']=="in") {
			require_once 'ContactenosIng.php';
		}

	}

?>