<html>
	<head></head>
	<script type="text/javascript">
	$(function(){
		$('#form').validate({
			rules: {
				'fname': 'required',
				'lname': 'required',
				'email': { required: true, email: true },
				'msg': 'required',
			},
			messages: {
				'fname': 'Debe ingresar el nombre',
				'lname': 'Debe ingresar el apellido',
				'email': { required: 'Debe ingresar un correo electrónico', email: 'Debe ingresar el correo electrónico con el formato correcto. Por ejemplo: u@localhost.com' },
				'msg': 'Debe ingresar el mensaje',
			},
			debug: true,
			errorElement: 'div',
			errorClass: "textError",
			//	errorContainer: $('#errores'),
			submitHandler: function(form){
				$('#messageModal').show('blind' , 500 ).delay(5000).hide('blind' , 1000 ).text('El formulario ha sido validado correctamente!');
			}
	    });
	});
	</script>
	<body>
		<fieldset>
			<legend align="right">Contáctenos!</legend>
			<article>
				<form id="form" align="center">
					<div>
						<label>Nombre</label>
						<input type="text" name="fname">

					<span align="left" class="hidden">
							Estas es una prueba
						</span>
					</div>
					<div>
						<label>Apellido</label>
						<input type="text" name="lname">
						<span align="left" class="hidden">
							Estas es una prueba
						</span>
					</div>
					<div>
						<label>Correo</label>
						<input type="email" name="email">
						<span align="left" class="hidden">
							Estas es una prueba
						</span>
					</div>
					<div>
						<label>Mensaje</label>
						<textarea name="msg"></textarea>
						<span align="left" class="hidden">
							Estas es una prueba
						</span>
					</div>
					<div align="right"><input type="submit" value="Contactar!"></div>
				</form>
			</article>
		</fieldset>
        <p align="center">
			<h3 align="center">Contact Center</h3>
            <div align="center">
                Carrera 13A No. 5A-20 Conjunto Industrial Porvenir II Bodega 25<br>
                Mosquera (Cundinamarca) - Colombia<br>
                Teléfono: 057 (1) 5222594<br>
                TeleFax: 057 (1) 6153053
            </div>
            <h3 align="center">Descargar Catálogo en PDF</h3>
   		</p>
	</body>
</html>