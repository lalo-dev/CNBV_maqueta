<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 11/04/2016 10:04:45																		  *
	**********************************************************************************************/
	
	require_once "../../../assets/php/includes/comun.php";
	
	if(isset($_POST["accion"])) {
	
		switch ($_POST["accion"]) {
			case "guardar":
				
				$query = "INSERT INTO cnbv_usuarios_areas_experiencia
							(
								id_area_experiencia,
								id_usuario,
								id_area,
								id_subarea,
								id_tiempo,
								status,
								id_usuario_creador,
								fecha_creacion,
								id_usuario_modificador,
								fecha_modificacion
							)
						VALUES
							(
								NULL,
								'".$_POST["id_u_a_e"]."',
								'".$_POST["id_area"]."',
								'".$_POST["id_subarea"]."',
								'".$_POST["id_tiempo"]."',
								'1',
								'1',
								SYSDATE(),
								'1',
								SYSDATE()
							)";
				$resultado = "";
				if(mysqli_query($conn,$query)) {
					echo mysqli_insert_id($conn);
				} else {
					echo "0";
				}
	
				break;
			case "editar":
	
				$query = "";
				$resultado = "";
				if(mysqli_query($conn,$query)) {
	
				} else {
	
				}
	
				break;
			case "eliminar":
	
				$query = "";
				$resultado = "";
				if(mysqli_query($conn,$query)) {
	
				} else {
	
				}
	
				break;
			default:
				break;
		}
	}
?>