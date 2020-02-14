<?php
	include('session.php');
	if(isset($_POST['ss'])){
	$search = $_POST['name'];
	$query=mysqli_query($conn,"select * from `productos` where descripcion like '%$search%' limit 5");
	?><fieldset><?php 
	if(mysqli_num_rows($query)==0){

		?>
		<div style="position:relative; left:20px; top:20px;">No se han encontrado resultados</div>
		<?php
?></fieldset><?php
	}
	else{

		while ($row = mysqli_fetch_array($query)) {
		?>

			<div style="position:relative; left:20px; top:20px;">
				<a href="search_result.php?id=<?php echo $row['codpro']; ?>" ><?php echo $row['descripcion']; ?></a><br>
			</div><br>

		<?php
		} ?><?php

	}
}
?>
