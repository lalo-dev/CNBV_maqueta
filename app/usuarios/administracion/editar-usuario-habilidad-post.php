<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 10/04/2016 23:42:13																		  *
	**********************************************************************************************/
	
	require_once "../../../assets/php/includes/comun.php";
	
	if(isset($_POST["accion"])) {
	
		$archivo_curriculum = "";//cargarArchivo($_POST["input-file-curriculum"]);
		$archivo_perfil = "";//cargarArchivo($_POST["input-file-perfil"]);
		$archivo_desempenio = "";//cargarArchivo($_POST["input-file-desempenio"]);
		$archivo_fotografia = "";//cargarArchivo($_POST["input-file-fotografia"]);
	
		switch ($_POST["accion"]) {
			case "guardar":
	
				$query = "INSERT INTO cnbv_usuarios_habilidades
							(
								id_usuario_habilidades,
								id_usuario,
								habilidad_1,
								habilidad_2,
								id_nivel,
								id_anios,
								status,
								id_usuario_creador,
								fecha_creacion,
								id_usuario_modificador,
								fecha_modificacion
							)
						VALUES
							(
								NULL,
								'".$_POST["id_u_h"]."',
								'".$_POST["habilidad_1"]."',
								'".$_POST["habilidad_2"]."',
								'".$_POST["id_nivel"]."',
								'".$_POST["id_anios"]."',
								'1',
								'1',
								SYSDATE(),
								'1',
								SYSDATE()
							)";
// 				die($query);
				if(mysqli_query($conn,$query)) {
					echo mysqli_insert_id($conn);
				} else {
					echo "0";
				}
	
				break;
			case "editar":
	
				$query = "";
				if(mysqli_query($conn,$query)) {
	
				} else {
	
				}
	
				break;
			case "eliminar":
	
				$query = "";
				if(mysqli_query($conn,$query)) {
	
				} else {
	
				}
	
				break;
			default:
				break;
		}
	}
	
	function cargarArchivo($input) {
		return "vacio";
	}
?>