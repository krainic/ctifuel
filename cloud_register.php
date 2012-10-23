<html>
	<head></head>
	<script type="text/javascript">
	$(function(){
		$('#form').validate({
			rules: {
				'fname': 'required',
				'lname': 'required',
				'email': { required: true, email: true },
				'user': 'required',
				'pass': 'required',
				'confirm_pass': { required: true, equalTo: '#pass' },
			},
			messages: {
				'fname': 'Debe ingresar el nombre',
				'lname': 'Debe ingresar el apellido',
				'email': { required: 'Debe ingresar un correo electrónico', email: 'Debe ingresar el correo electrónico con el formato correcto. Por ejemplo: u@localhost.com' },
				'user': 'Debe ingresar el usuario',
				'pass': 'Debe ingresar la clave',
				'confirm_pass': 'Debes confirmar la clave',
			},
			debug: true,
			errorElement: 'div',
			errorClass: "textError",
			//	errorContainer: $('#errores'),
			submitHandler: function(form){
				alert('El formulario ha sido validado correctamente!');
			}
	    });
	});
	</script>
	<body>
		<fieldset>
			<legend align="right">Registrate!</legend>
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
						<label>Usuario</label>
						<input type="text" name="user">
						<span align="left" class="hidden">
							Estas es una prueba
						</span>
					</div>
					<div>
						<label>Clave</label>
						<input type="password" id="pass" name="pass">
						<span align="left" class="hidden">
							Estas es una prueba
						</span>
					</div>
					<div>
						<label>Confirma Clave</label>
						<input type="password" name="confirm_pass">
						<span align="left" class="hidden">
							Estas es una prueba
						</span>
					</div>
					<div align="right"><input type="submit" value="Registrar!"><input type="button" value="Tester" onClick="$('#messageModal').show('blind' , 500 ).delay(5000).hide('blind' , 1000 );"></div>
				</form>
			</article>
		</fieldset>
	</body>
</html>