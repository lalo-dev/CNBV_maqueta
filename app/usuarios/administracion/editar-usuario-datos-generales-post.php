<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 08/04/2016 17:55:09																		  *
	**********************************************************************************************/

// 	echo "<pre>";
// 		print_r($_POST);
// 	echo "<pre>";
	
	require_once "../../../assets/php/includes/comun.php";
	
	if(isset($_POST["accion"])) {
		
		$archivo_curriculum = "";//cargarArchivo($_POST["input-file-curriculum"]);
		$archivo_perfil = "";//cargarArchivo($_POST["input-file-perfil"]);
		$archivo_desempenio = "";//cargarArchivo($_POST["input-file-desempenio"]);
		$archivo_fotografia = "";//cargarArchivo($_POST["input-file-fotografia"]);
		
		switch ($_POST["accion"]) {
			case "guardar":
				
				$fecha_nacimiento = $_POST["anio_nacimiento"] . "-" . $_POST["mes_nacimiento"] . "-" . $_POST["dia_nacimiento"];
				$query = "INSERT INTO cnbv_usuarios
							(
								id_usuario,
								nombre,
								apellido_paterno,
								apellido_materno,
								usuario,
								contrasenia,
								fecha_nacimiento,
								sexo,
								rfc,
								numero_expediente,
								id_area,
								id_cargo,
								id_nivel,
								codigo,
								id_estatus,
								id_codigo_puesto,
								id_grado,
								codigo_nivel,
								curp,
								lugar_nacimiento,
								id_nacionalidad,
								inciales,
								correo_cnbv,
								correo_personal,
								telefono_celular,
								telefono_fijo,
								direccion,
								extencion,
								torre,
								piso,
								coordenada,
								cedula,
								curriculum,
								perfil_puesto,
								id_estado_civil,
								desempenio,
								documento_desempeño,
								fotografia,
								status,
								id_usuario_creador,
								fecha_creacion,
								id_usuario_modificador,
								fecha_modificacion
							)
						VALUES
							(
								NULL,
								'".$_POST["nombre"]."',
								'".$_POST["apellido_paterno"]."',
								'".$_POST["apellido_materno"]."',
								'".$_POST["usuario"]."',
								'".$_POST["contrasenia"]."',	
								'".$fecha_nacimiento."',
								'".$_POST["sexo"]."',
								'".$_POST["rfc"]."',
								'".$_POST["numero_expediente"]."',
								'".$_POST["id_area"]."',
								'".$_POST["id_cargo"]."',
								'".$_POST["id_nivel"]."',
								'".$_POST["codigo"]."',
								'".$_POST["id_estatus"]."',
								'".$_POST["id_codigo_puesto"]."',
								'".$_POST["id_grado"]."',
								'".$_POST["cod_nivel"]."',
								'".$_POST["curp"]."',
								'".$_POST["lugar_nacimiento"]."',
								'".$_POST["id_nacionalidad"]."',
								'".$_POST["iniciales"]."',
								'".$_POST["correo_cnbv"]."',
								'".$_POST["correo_personal"]."',
								'".$_POST["telefono_celular"]."',
								'".$_POST["telefono_fijo"]."',
								'".$_POST["direccion"]."',
								'".$_POST["extencion"]."',
								'".$_POST["torre"]."',
								'".$_POST["piso"]."',
								'".$_POST["coordenada"]."',
								'".$_POST["cedula"]."',		
								'".$archivo_curriculum."',
								'".$archivo_perfil."',
								'".$_POST["id_estado_civil"]."',
								'".$_POST["desempenio"]."',
								'".$archivo_desempenio."',
								'".$archivo_fotografia."',
								'1',
								'1',
								SYSDATE(),
								'1',
								SYSDATE()
							)";
// 				die($query);
				$resultado = "";
				if(mysqli_query($conn,$query)) {
					echo "exito";
				} else {
					echo $query;
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