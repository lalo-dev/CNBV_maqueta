$(document).ready(function() {
	$('#btn_guardar_datos_generales').click(function() {
		alert("iniciando");
		$.post("editar-usuario-datos-generales-post.php", $("#frm_usuario_datos_generales").serialize(), function(data) {
			$('#dib_borrar').append(data);
			alert(data);
		});
	});

	$('#frm_usuario_datos_escolaridad').click(function() {
		alert("iniciando");
		$.post("editar-usuario-datos-escolaridad-post.php", $("#frm_usuario_datos_generales").serialize(), function(data) {
			alert(data);
//			$('#div').append(data);
		});
	});
	
//	$('#btn_guardar_datos_generales').click(function() {
//		$.post("editar-usuario-post.php", $("#frm_usuario_datos_generales").serialize(), function(data) {
//			$('#div').append(data);
//		}, "json");
//	});
});