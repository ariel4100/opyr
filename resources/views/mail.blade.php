<!DOCTYPE html>

<html>
	<style>
		body {
			font-family: Helvetica, sans-serif;
			color:#494949;
		}

		ul {
			list-style: none;
		}

		div{
			background-color: #F8F8F8;
			width: 85%;
			border-radius:20px;
			padding: 1rem 2rem;
		}
	</style>
<body>
	<div>
		<h2>OPYR</h2>
		<h3>Solicitud de Registro</h3>
		<p>Enviado desde la web </p>
		<br>
		<h3>Datos del Registrante</h3>
		<ul>
{{--            {{ dd($name) }}--}}
            <li><strong>Nombre:</strong>{{ isset($name) ? $name : '' }}</li>
            <li><strong>Usuario:</strong>{{ isset($username) ? $username : '' }}</li>
            <li><strong>Email:</strong> {{ isset($email) ? $email : '' }}</li>
            <li><strong>Teléfono:</strong> {{ isset($telefono) ? $telefono : '' }}</li>
			<br>
			<br>
			<h4>Para dar de alta al usuario ingrese a:</h4>
            <a href="http://opyr.com.ar/adm/privada/cliente" class="" style="color: #0D47A1">DAR DE ALTA</a>
		</ul>
	</div>
</body>
</html>
