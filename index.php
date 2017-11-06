<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<img src="./imagenes/logo.png" id="logo">
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>
		
	<?php
		include 'conexion.php';

		$stmt = $dbConn->query('SELECT * FROM productos');
		
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	?>
			<div class="producto">
				<center>
					<img src="./productos/<?php echo $row['imagen'];?>"><br>
					<span><?php echo $row['nombre'];?></span><br>
					<a href="./detalles.php?id=<?php  echo $row['id'];?>">ver</a>
				</center>
			</div>
	<?php
		}
	?>
		
		

		
	</section>
	
</body>
</html>