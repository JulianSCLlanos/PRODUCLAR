<?php 
$conexion=mysqli_connect('localhost','root','','departamentos');
$continente=$_POST['continente'];

	$sql="SELECT id,
			 id_departamento,
			 municipio 
		from municipios 
		where id_departamento='$continente'";

	$result=mysqli_query($conexion,$sql);

	$cadena="<select class='form-control placeholder-no-fix input-circle2' type='text'  required placeholder='Municipio' id='lista2' name='lista2'>";


	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";
	

?>