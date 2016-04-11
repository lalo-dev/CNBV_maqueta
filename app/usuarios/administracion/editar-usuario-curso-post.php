<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 11/04/2016 09:37:50																		  *
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
				
				$query = "INSERT INTO cnbv_usuarios_cursos
							(
								id_usuarios_cusros,
								id_usuario,
								curso,
								id_curso,
								fecha_inicio,
								fecha_fin,
								duracion_horas,
								id_institucion,
								status,
								id_usuario_creador,
								fecha_creacion,
								id_usuario_modificador,
								fecha_modificacion
							)
						VALUES
							(
								NULL,
								'".$_POST["id_u_cu"]."',
								'".$_POST["curso"]."',
								'".$_POST["id_curso"]."',
								'".$fecha_desde."',
								'".$fecha_hasta."',
								'".$_POST["duracion_horas"]."',
								'".$_POST["id_institucion"]."',
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
	
	function cargarArchivo($input) {
		return "vacio";
	}
?>