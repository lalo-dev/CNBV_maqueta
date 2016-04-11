$(document).ready(function() {
	$('#btn_guardar_datos_generales').click(function() {
		$.post("editar-usuario-datos-generales-post.php", $("#frm_usuario_datos_generales").serialize(), function(data) {
			alert(data);
			if(data > 0) {
				$('#id').val(data);
				$('#id_u_e').val(data);
				$('#id_u_e').val(data);
				$('#id_u_h').val(data);
				$('#id_u_c').val(data);
				$('#id_u_cu').val(data);
				$('#id_u_e_p').val(data);
				$('#id_u_a_e').val(data);
			}
		});
	});

	$('#btn_guardar_escolaridad').click(function() {
		$.post("editar-usuario-escolaridad-post.php", $("#frm_usuario_escolaridad").serialize(), function(data) {
			alert(data);
			if(data > 0) {
				$('#id_e').append(data);
			}
		});
	});

	$('#btn_guardar_habilidad').click(function() {
		$.post("editar-usuario-habilidad-post.php", $("#frm_usuario_habilidad").serialize(), function(data) {
			alert(data);
			if(data > 0) {
				$('#id_h').append(data);
			}
		});
	});

	$('#btn_guardar_certificacion').click(function() {
		$.post("editar-usuario-certificacion-post.php", $("#frm_usuario_certificacion").serialize(), function(data) {
			alert(data);
			if(data > 0) {
				$('#id_c').append(data);
			}
		});
	});

	$('#btn_guardar_curso').click(function() {
		$.post("editar-usuario-curso-post.php", $("#frm_usuario_curso").serialize(), function(data) {
			alert(data);
			if(data > 0) {
				$('#id_cu').append(data);
			}
		});
	});

	$('#btn_guardar_experiencia_profesional').click(function() {
		$.post("editar-usuario-experiencia-profesional-post.php", $("#frm_usuario_experiencia_profesional").serialize(), function(data) {
			alert(data);
			if(data > 0) {
				$('#id_e_p').append(data);
			}
		});
	});

	$('#btn_guardar_area_experiencia').click(function() {
		$.post("editar-usuario-area-experiencia-post.php", $("#frm_usuario_area_experiencia").serialize(), function(data) {
			alert(data);
			if(data > 0) {
				$('#id_a_e').append(data);
			}
		});
	});
	
//	$('#btn_guardar_datos_generales').click(function() {
//		$.post("editar-usuario-post.php", $("#frm_usuario_datos_generales").serialize(), function(data) {
//			$('#div').append(data);
//		}, "json");
//	});
});