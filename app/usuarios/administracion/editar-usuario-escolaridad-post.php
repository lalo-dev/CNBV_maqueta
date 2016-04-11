<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 08/04/2016 19:05:12																		  *
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
				
				$query = "INSERT INTO cnbv_usuarios_escolaridad
							(
								id_usuario_escolaridad,
								id_usuario,
								id_institucion,
								id_titulo_escolaridad,
								fecha_desde,
								fecha_hasta,
								id_anios,
								id_documento_obtenido,
								id_estatus_escolaridad,
								status,
								id_usuario_creador,
								fecha_creacion,
								id_usuario_modificador,
								fecha_modificacion
							)
						VALUES
							(
								NULL,
								'".$_POST["id_u_e"]."',
								'".$_POST["id_institucion"]."',
								'".$_POST["id_titulo_escolaridad"]."',
								'".$fecha_desde."',
								'".$fecha_hasta."',
								'".$_POST["id_anios"]."',
								'".$_POST["id_documento_obtenido"]."',
								'".$_POST["id_estatus_escolaridad"]."',
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
	
	function cargarArchivo($input) {
		return "vacio";
	}
?>