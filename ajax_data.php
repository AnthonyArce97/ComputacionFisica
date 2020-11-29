
<!DOCTYPE html>
<html lang = "es">
	<head>
		<title>Búsqueda simple por rangos de fechas usando PHP y Ajax</title>
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
		<link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css"/>
		<meta charset = "UTF-8" name = "viewport" content = "width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	</head>
<body>
	<nav class = "navbar navbar-inverse">
		<div class = "container-fluid">
			<a href = "https://obedalvarado.pw/blog" class = "navbar-brand">Sistemas Web</a>
		</div>
	</nav>
	<div class = "row-fluid">
		<div class = "col-md-3"></div>
		<div class = "col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class = "text-primary">Búsqueda simple por rangos de fechas usando PHP y Ajax</h3>
				<hr style = "border-top:1px dotted #000;"/>
				<div class = "form-inline">
				<label>Desde:</label>
				<input type = "text" class = "form-control" placeholder = "Inicio"  id = "date1"/>
				<label>Hasta</label>
				<input type = "text" class = "form-control" placeholder = "Final"  id = "date2"/>
				<button type = "button" class = "btn btn-primary" id = "btn_search" onclick="load();"><span class = "glyphicon glyphicon-search"></span></button> <button type = "button" id = "reset" class = "btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></button>
			</div>
			<br /><br />
			<div class = "table-responsive">	
				<table class = "table table-bordered alert-warning">
					<thead>
						<tr>
							<th style = "width:25%;">ISBN</th>
							<th style = "width:30%;">Título</th>
							<th>Autor</th>
							<th style = "width:20%;">Publicado</th>
						</tr>
					</thead>
					<tbody id = "load_data">
						
					</tbody>
				</table>
			</div>	
			  
			  </div>
		</div>
		
		
		</div>
	</div>
</body>
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/jquery-ui.js"></script>
<script src = "js/ajax.js"></script>
</html>