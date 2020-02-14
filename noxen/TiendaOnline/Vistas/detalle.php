 <!DOCTYPE html>

<?php
include '../DAO/MetodosDAO.php';

$cod=$_REQUEST['cod'];

$objMetodos=new MetodosDAO();

$lista=$objMetodos->ListarProductosCod($cod);

foreach ($lista as $row) {
	$cod=$row[0];
	$nombre=$row[1]; 
	$precio=$row[2];
	$detalle=$row[5];
	$Tamaño=$row[4];
	$stock=$row[3];
	
}

?>

<html>

<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form>
	<table border="0">
		<tr>
			<th rowspan="5"><img src="../Images2/<?php echo $cod; ?>.jpg"
				width="180" height="300"></th>
				<th><?php echo $nombre;?></th>
		</tr>
		<tr>
			<th align="justify"><?php echo $detalle; ?></th>
		</tr>
		
		<tr>
			<th align="right">Cantidad: <?php echo $Tamaño; ?></th>

		</tr>
		<tr>
			
			<th align="right">Precio: <?php echo $precio; ?> COP</th>
		</tr>
		<tr>
			
	
		</tr>
		<tr>
			

		</tr>

		<tr>


			<th align="right" colspan="2">
				<br>
				

				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				
        <div class="botones">
        <button class='btn-add' onclick="addItemToCarrito(<?php echo $cod?>)">Agregar al carrito</button>
    </div>

		
					
				


       
 

			
				
			</th>
		</tr>
		
	</table>
		
	</form>
</body>
</html>