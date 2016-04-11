<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 09/04/2016 02:22:12																		  *
	**********************************************************************************************/
	
	session_name("cnbv_session");
// 	session_set_cookie_params(0, '/', '.scout4us.com');
	session_start();
	
	include "configuracion.php";
	
	$conn = mysqli_connect(CNBV_BD_SERVIDOR, CNBV_BD_USUARIO, CNBV_BD_CONTRASENA, CNBV_BD_BASE_DATOS, CNBV_BD_PUERTO);
	mysqli_select_db($conn, CNBV_BD_BASE_DATOS);
	mysqli_set_charset($conn, 'utf8');
	
// 	if ( !isset($_SESSION['id_usuario']) ) exit();
?>