<?php

	//Llamada al modelo
	require_once("models/encomienda_model.php");
	
	//Creamos un objeto de la clase personas_model
	$encomienda = new encomienda_model();
	//Mediante el objeto invocamos al metodo getPersonas y guardamos
	//el resultado dentro de $datos
	$datos = $encomienda->getEncomienda();
	 
	//Llamada a la vista
	require_once("views/encomienda_view.php");
	
?>

