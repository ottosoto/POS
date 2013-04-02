<!DOCTYPE html>
	<html lang="es">
		<head>
			<title>.:: Error: Aplicaci�n No Configurada ::.</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<?php echo NeuralScriptAdministrador::OrganizarScript(array('CSS' => array('BOOSTRAP', 'RESPONSIVE', 'DOCS'))); ?>
		</head>
		<body data-spy="scroll" data-target=".bs-docs-sidebar">
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="brand" style="color: white;">Error de Aplicaci�n</a>
						<div class="nav-collapse collapse"></div>
					</div>
				</div>
				<header class="jumbotron subhead" id="overview">
  					<div class="container">
						<h2>Aplicaci�n No Encontrada</h2>
						<p class="lead">Aplicaci�n: <?php echo rtrim($Carpeta, '/'); ?></p>
					</div>
				</header>
				


				<div class="container">
					<div class="row">
						<div class="span9">
							<section id="Inicio">
							<div class="alert alert-error">
								<p class="lead">Actualmente no se encuentran los archivos de la aplicaci�n configurada por defecto, puede ser un problema de nombre de la aplicaci�n y/o problemas del archivo de configuraci�n de accesos.</p>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>