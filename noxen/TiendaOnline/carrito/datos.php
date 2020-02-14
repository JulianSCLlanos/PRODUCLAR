<?php 

include_once 'carrito.php';




function precio ($carrito){

$itemsCarrito=json_decode($carrito->load(),1);
$fullItems= [];
$amount=0;
$totalItems=0;

foreach ($itemsCarrito as $itemCarrito) {
	
	$httpRequest = file_get_contents('http://localhost/xampp/TiendaOnline/productos/api-productos.php?get-item=' . $itemCarrito['codpro']);

		$itemProducto = json_decode($httpRequest, 1)['item'];
		$itemProducto['cantidad']=$itemCarrito['cantidad'];
		$itemProducto['subtotal']=$itemProducto['cantidad']*$itemProducto['precio'];

		$amount+=$itemProducto['subtotal'];
		$totalItems+=$itemProducto['cantidad'];

	   	
                $apiKey="4Vj8eK4rloUd272L48hsrarnUA";
                $merchantId="508029";
                $accountId="512321";
                $description="Compra";
                $referenceCode="01";
                
                $tax="0";
                $taxReturnBase="0";
                $currency="COP";
                $signature="";
                $test="0";
                $buyerEmail="ariascristian085@gmail.com";
                $responseUrl="http://localhost/panel/noxen/TiendaOnline/Vistas/Catalogo.php";
                $confirmationUrl="http://localhost/panel/noxen/TiendaOnline/Vistas/Catalogo.php";
                //$firma=“$apiKey~$merchantId~$referenceCode~$amount~$currency”;
                $firmaMD5=md5($apiKey."~".$merchantId."~".$referenceCode."~".$amount."~".$currency);}

}



 ?>

<form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
 <input name="ApiKey"    type="hidden"  value="<?php echo $apikey; ?>"   >
  <input name="merchantId"    type="hidden"  value="<?php echo $merchantId; ?>"   >
  <input name="accountId"     type="hidden"  value="<?php echo $accountId; ?>" >
  <input name="description"   type="hidden"  value="<?php echo $description; ?>"  >
  <input name="referenceCode" type="hidden"  value="<?php echo $referenceCode; ?>" >
  <input name="amount"        type="hidden"  value="<?php echo $amount; ?>"   >
  <input name="tax"           type="hidden"  value="<?php echo $tax; ?>"  >
  <input name="taxReturnBase" type="hidden"  value="<?php echo $taxReturnBase; ?>" >
  <input name="currency"      type="hidden"  value="<?php echo $currency; ?>" >
  <input name="signature"     type="hidden"  value="<?php echo $firmaMD5; ?>"  >
  <input name="test"          type="hidden"  value="<?php echo $test; ?>" >
  <input name="buyerEmail"    type="hidden"  value="<?php echo $buyerEmail; ?>" >
  <input name="responseUrl"    type="hidden"  value="<?php echo $responseUrl; ?>" >
  <input name="confirmationUrl"    type="hidden"  value="<?php echo $confirmationUrl; ?>" >


  <input name="Submit"        type="submit"  value="Enviar" >
</form>