<!DOCTYPE html>
<?php
session_start();
$lista=$_SESSION['lista'];

?>

<html>
<!-- Barra de Navegacion -->
<!-- Barra de Navegacion -->

<style >
	
	button{
    border: 0;
    border-radius: 5px;
    background: rgb(255, 157, 10);
    cursor: pointer;
    padding: 10px;
	}

	#carrito-container{
	width: 400px;
    background: white;
    border: solid 1px #000;
    padding: 10px;
    box-sizing: border-box;
    position: absolute;
    right: 0;
    margin-top: 10px;
    display: none;
	}	


#tabla .fila{
    box-sizing: border-box;
    padding: 10px 0;
}

#tabla .fila .imagen{
    display: inline-block;
    width: 100px;
}
#tabla .fila .info{
    box-sizing: border-box;
    font-size: 14px;
    display: inline-block;
    padding-left: 20px;
    vertical-align: top;
    width: 273px;
}

#tabla .fila .info .nombre{
    font-size: 20px;
    font-weight: bold;
}
#tabla .fila .info .botones{
    padding: 20px 0 0 0;
}

#tabla p{
    font-size: 24px !important;
    text-align: left;
    font-weight: bold;
}
}
</style>


<head>

	<!-- Required meta tags -->

 <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
    	body{
    		padding-top: 80px;
    	}
    </style>

	<title></title>

</head>


<body>
  <?php
        include_once('../layout/menu.php');
    ?>

	<div class="container">
	 

<h2 align="center"><img src="../Images2/aceitesss.jpg" width="350" height="200"></h2>
<br>
<br>

<h1 align="center"><p style="font-family: Arial" >CATALOGO DE PRODUCTOS</p></h1>


<br>
<br>

<Table border="0" width="700" align="center" class = "table">
	<tr align="center">
	<?php
	$num=0;
	foreach ($lista as $reg){
		if ($num==4) {
			echo "<tr align= 'center'>";

			$num=1;

		}else{

			$num++;
			
		}
		?>

		<th><img src="../Images2/<?php echo $reg[6];?>" width="130" height = "200">
			<br>
			<?php echo$reg[1];?>
			
			<br>

			<br><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"
			 onclick="enviar(<?php echo $reg[0];?>)">Detalle</button> <br> <br><br>



		</th>
		<?php
	}
	?>


</Table>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detalle de producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="mostrar">
        ...
      </div>
    </div>
  </div>
</div>


<script>
	var resultado=document.getElementById("mostrar");
	function enviar(c) {
		var xmlhttp;
		if(window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}
		else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}

		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				resultado.innerHTML=xmlhttp.responseText;

			}

		}

		xmlhttp.open("GET", "detalle.php?cod=" +c,true);
		xmlhttp.send();


		
	}
</script>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="js/main.js"></script>

</body>




</html>