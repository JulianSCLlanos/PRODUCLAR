<html>
<head>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>	<?php
	include('session.php');
$_SESSION['c3_id'];

?>
<?PHP
		/* Connect To Database*/

$fecha= date("Y-m-d H:i:s");
$date= date("Y-m-d H:i:s");


	$total=$_GET['total'];
$dato1="SELECT  COUNT(cartid) as a  FROM cart where userid='".$_SESSION['c3_id']."'";
	$queri=mysqli_query($conn,$dato1);
	$rowe = mysqli_fetch_assoc($queri);
	$cantidadcompra = $rowe['a'];
	
	
	$dato2="SELECT  COUNT(numPedido) as ab  FROM pedido";
	$queri2=mysqli_query($conn,$dato2);
	$rowe2 = mysqli_fetch_assoc($queri2);
	$facturas = $rowe2['ab']+1;
	$facturan = 'AA'.$facturas;
	
	
	$dato3="SELECT  * FROM user where id_user='".$_SESSION['c3_id']."'";
	$queri3=mysqli_query($conn,$dato3);
	$rowe3 = mysqli_fetch_array($queri3);
	$email_cliente = $rowe3['mail_user'];
	
	
	
	if($cantidadcompra<=0){
		
  echo "No hay productos en el carrito";
 
 
	}
	else{
	


$dato="SELECT * FROM  productos, cart where productos.codpro=cart.productid and cart.userid='".$_SESSION['c3_id']."'";

	$query3=mysqli_query($conn,$dato);


		while($row=mysqli_fetch_array($query3)){

			$id_tmp=$row["cartid"];
	$id_producto=$row["codpro"];
	$cantidad=$row['qty'];
	$nombre_producto=$row['descripcion'];
	$precio_venta_r=$row['precio'];
	$cantidadstock=$row['stock'];

	$cantidadfinal=$cantidadstock-$cantidad;
			
			
	$insert_detail1=mysqli_query($conn, "UPDATE productos SET stock='".$cantidadfinal."' where codpro='".$id_producto."'");
		
	 $insert_detail=mysqli_query($conn, "INSERT INTO pedido(contador) VALUES('1')");
	
	
	 echo"<script>alert('Compra Exitosa.');</script>"; 
	
	
	


$delete=mysqli_query($conn,"DELETE FROM cart WHERE userid='".$_SESSION['c3_id']."'");
		}
		?>
<?php

//$url = 'https://checkout.payulatam.com/ppp-web-gateway-payu/'; // Producción
$url = 'https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/'; // Sandbox

$ApiKey = '4Vj8eK4rloUd272L48hsrarnUA'; // Obtener este dato dela cuenta de Payu
$merchantId = '508029'; // Obtener este dato dela cuenta de Payu
$accountId = '512321'; // Obtener este dato dela cuenta de Payu
$description = 'COMPRA DE PRODUCTOS ACEITES PRODUCLAR'; //Descripción del pedido
$referenceCode = $facturan; // Referencia Unica del pedido
$amount = $total; //Es el monto total de la transacción. Puede contener dos dígitos decimales. Ej. 10000.00 ó 10000.
$tax = '0'; // Es el valor del IVA de la transacción, si se envía el IVA nulo el sistema aplicará el 19% automáticamente. Puede contener dos dígitos decimales. Ej: 19000.00. En caso de no tener IVA debe enviarse en 0.
$taxReturnBase = '0'; // Es el valor base sobre el cual se calcula el IVA. En caso de que no tenga IVA debe enviarse en 0.
$currency = 'COP'; // Moneda
$test = '0'; // Variable para poder utilizar tarjetas de crédito de pruebas, los valores pueden ser 1 ó 0.
$buyerEmail = $email_cliente; // Respuesta por Payu al comprador
$responseUrl = ''; // URL de respuesta,
$confirmationUrl = ''; // URL de confirmación
$confirmacionEmail = $email_cliente; // Confirmación email

$firma = "$ApiKey~$merchantId~$referenceCode~$amount~$currency";
$firmaMd5 = md5($firma);


?>

<body onLoad="setTimeout('cargar_pagina()',2000);">

	<script language=Javascript>
	
function cargar_pagina(){
	
form1.action='https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/';
form1.submit();
}
</script>

		<form method="POST" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/" name="form1">

	
 <input name="merchantId" id="merchantId"  type="hidden" value="<?php echo $merchantId; ?>" >
 <input name="accountId"  id="accountId" type="hidden"  value="<?php echo $accountId; ?>" >
 <input name="description"  id="description"type="hidden" value="<?php echo $description; ?>" >
 <input name="referenceCode" id="referenceCode" type="hidden"value="<?php echo $referenceCode; ?>" >
 <input name="amount"  id="amount"   type="hidden"  value="<?php echo $amount; ?>" >
 <input name="tax"        id="tax" type="hidden"  value="<?php echo $tax; ?>" >
 <input name="taxReturnBase" id="taxReturnBase" type="hidden"value="<?php echo $taxReturnBase; ?>" >
 <input name="currency"   id="currency" type="hidden"  value="<?php echo $currency; ?>" >
 <input name="signature"  id="signature"  type="hidden" value="<?php echo $firmaMd5; ?>" >
 <input name="test"       id="test"  type="hidden"   value="<?php echo $test; ?>" >
 <input name="buyerEmail"  id="buyerEmail" type="hidden"  value="<?php echo $buyerEmail; ?>" >
 <input name="responseUrl"  id="responseUrl" type="hidden"  value="<?php echo $responseUrl; ?>" >
 <input name="confirmationUrl" id="confirmationUrl" type="hidden" value="<?php echo $confirmationUrl; ?>" >

</form>
	<?php } ?>
</body>
</html>