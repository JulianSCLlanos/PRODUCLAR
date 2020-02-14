<?php
	include('session.php');
	if(isset($_POST['check'])){
		?>
		<table width="100%" class="table table-striped table-bordered table-hover">
			<thead>
				<th></th>
				<th>Nombre del producto</th>
				<th>Cantidad disponible</th>
				<th>Precio del producto</th>
				<th>Cantidad de compra</th>
				<th>SubTotal</th>
			</thead>
			<tbody>
			<form method="POST" action="procesos.php" enctype="multipart/form-data">
			<?php
				$total=0;
				$query=mysqli_query($conn,"select * from cart left join productos on productos.codpro=cart.productid where userid='".$_SESSION['c3_id']."'");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><button type="button" class="btn btn-danger btn-sm remove_prod" value="<?php echo $row['codpro']; ?>"><i class="glyphicon glyphicon-remove-circle"></i> Elimina</button></td>
						<td><?php echo $row['descripcion']; ?></td>
						<td><?php echo $row['stock']; ?></td>
						<td align="right"><?php echo number_format($row['precio'],2); ?></td>
						<td><button type="button" class="btn btn-warning btn-sm minus_qty2" value="<?php echo $row['codpro']; ?>"><i class="glyphicon glyphicon-minus"></i></button>
							<button type="button"class="btn btn-primary btn-sm add_qty2" value="<?php echo $row['codpro']; ?>"><i class="glyphicon glyphicon-plus"></i></button>
							<?php echo $row['qty'];?>
						</td>
						<td align="right"><strong> <span class="subt">
							<?php
								$subtotal=$row['qty']*$row['precio'];
								echo number_format($subtotal,2);
								$total+=$subtotal;
							?>
						</span></strong></td>
					</tr>
					<?php
				}
			?>
			<tr>
				<td colspan="5"><span class="pull-right"><strong>El Total:</strong></span></td>
				<td align="right"><strong><span id="total"> <?php echo number_format($total,2); ?></span> <strong></td>
				</TR>
				<TR>
				<TD colspan="6" align="right"><b> COP (IVA INCLUIDO)</b></TD>
			</tr>
			
			</tbody>
		</table>
<form method="POST" action="procesos.php" enctype="multipart/form-data">
			<input type="hidden" name="campo" value="1">

 <td colspan="6"><a href="procesos.php?total=<?php echo $total;?>"><button class="btn btn-block btn-lg btn-success">Realizar Pago</button></a></td>

</form>
		<?php
	}


?>
