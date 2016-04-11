<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 11/04/2016 09:54:09																		  *
	**********************************************************************************************/
	
	require_once "../../../assets/php/includes/comun.php";
	
	if(isset($_POST["accion"])) {
	
		$archivo_curriculum = "";//cargarArchivo($_POST["input-file-curriculum"]);
		$archivo_perfil = "";//cargarArchivo($_POST["input-file-perfil"]);
		$archivo_desempenio = "";//cargarArchivo($_POST["input-file-desempenio"]);
		$archivo_fotografia = "";//cargarArchivo($_POST["input-file-fotografia"]);
	
		switch ($_POST["accion"]) {
			case "guardar":
	
				$fecha_desde = $_POST["anio_desde"] . "-" . $_POST["mes_desde"] . "-" . $_POST["dia_desde"];
				$fecha_hasta = $_POST["anio_hasta"] . "-" . $_POST["mes_hasta"] . "-" . $_POST["dia_hasta"];
				
				$query = "INSERT INTO cnbv_usuarios_experiencia_profesional
							(
								id_usuarios_experiencia_profesional,
								id_usuario,
								empresa,
								giro,
								puesto,
								fecha_inicio,
								fecha_fin,
								actividades,
								status,
								id_usuario_creador,
								fecha_creacion,
								id_usuario_modificador,
								fecha_modificacion
							)
						VALUES
							(
								NULL,
								'".$_POST["id_u_e_p"]."',
								'".$_POST["empresa"]."',
								'".$_POST["giro"]."',
								'".$_POST["puesto"]."',
								'".$fecha_desde."',
								'".$fecha_hasta."',
								'".$_POST["actividades"]."',
								'1',
								'1',
								SYSDATE(),
								'1',
								SYSDATE()
							)";
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