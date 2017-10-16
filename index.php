<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Gestión UDL</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
  	<!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
  	<!--Link to the stylesheet-->
  	<link rel="stylesheet" href="css/styles.css">
  	<!--Agregando FAVICON-->
  	<link rel="apple-touch-icon" sizes="57x57" href="image/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="image/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="image/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="image/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="image/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="image/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="image/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="image/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="image/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="image/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="image/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="image/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="image/favicon/favicon-16x16.png">
	<link rel="manifest" href="image/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>
<body class="grey darken-2">
	<div class="container">
		<div class="row">
			<div class="col s12 m6">
			  <div class="card blue-grey darken-1">
			    <div class="card-content white-text">
			      <span class="card-title">Inicio de sesión</span>
			      <form action="index.php">
			      	<div class="row">
				        <div class="input-field col s12">
				          <input placeholder="Usuario" id="first_name" type="text" class="validate">
				          <label for="first_name" class="active">Usuario</label>
				        </div>
				    </div>
				     <div class="row">
				        <div class="input-field col s12">
				          <input id="password" type="password" class="validate">
				          <label for="password" class="active">Contraseña</label>
				        </div>
                        <div class="right-align">
                         <button class="black-text right-align">Iniciar sesión</button>   
                        </div>
                         
				    </div>
			      </form>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</body>
</html>