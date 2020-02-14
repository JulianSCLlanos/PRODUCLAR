<?php
	include('session.php');
	if(isset($_POST['fcart'])){
		$query=mysqli_query($conn,"select * from `cart` left join productos on productos.codpro=cart.productid where userid='".$_SESSION['c3_id']."'");
		if (mysqli_num_rows($query)<1){
			echo "Tu carrito esta vacío <br><br>";
		}
		else{
		
			
		while($row=mysqli_fetch_array($query)){
			?>
			<div class="row">
				<div class="col-lg-1">
					<button type="button" class="btn btn-danger btn-sm remove_product" value="<?php echo  $row['codpro']; ?>"><i class="glyphicon glyphicon-remove-circle"></i></button>
				</div>
				<div class="col-lg-2">
					<button type="button" class="btn btn-warning btn-sm minus_qty" value="<?php echo  $row['codpro']; ?>"><i class="glyphicon glyphicon-minus"></i> </button> 
				</div>
				<div class="col-lg-1" style="text-align:center; position:relative; top:4px; left:10px;">
					<span class="pull-right"><strong><?php echo $row['qty']; ?></strong></span>
				</div>
				<div class="col-lg-1">
					<button type="button"class="btn btn-primary btn-sm add_qty" max="<?php echo $cantidad;?>" value="<?php echo $row['codpro']; ?>"><i class="glyphicon glyphicon-plus"></i></button>
				</div>
				<div class="col-lg-1">
					<img src="../Images2/<?php if (empty($row['imagen'])){echo "Produu.jpg";}else{echo $row['imagen'];} ?>" style="width: 30px; height:30px; position:relative; left:5px;" class="thumbnail">
				</div>
				<div class="col-lg-6">
					<span style="font-size:11px; position:relative; left:7px; top:3px;"><?php echo $row['descripcion']; ?></span>
				</div>
			</div>
			<?php
		}
		}
	}

?>
