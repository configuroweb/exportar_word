<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://www.configuroweb.com/desarrollo/">ConfiguroWeb</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Exportar de formulario HTML a MS Word</h3 >
		<hr style="border-top:1px dotted #ccc;"/>
		<div class ="col-md-6">
			<form action="export.php" method="POST">
				<div class="form-group">
					<h4>Titular en el Documento</h4>
					<input type="text" name="title" class="form-control"/>
				</div>
				<br />
				<div class="form-group">
					<h4>Contenido para el Documento</h4>
					<textarea class="form-control" name="content" style="resize:none; height:250px;"></textarea>
				</div>
				<button name="export" class="btn btn-primary"><span class="glyphicon glyphicon-export"></span> Exportar a MS Word</button>
			</form>
		</div>
	</div>
</body>
</html>