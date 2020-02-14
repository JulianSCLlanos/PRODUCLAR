<?php


include_once 'productos.php';

if (isset($_GET['get-item'])) {
	
	$codpro = $_GET['get-item'];
	
	if ($codpro == '') {
		echo json_encode(['statuscode'=> 400, 'response' =>'no hay valor para codigo']);
	}

	else{
		$productos = new productos();
		$item=$productos->get($codpro);
		echo json_encode(['statuscode'=> 200, 'item' => $item]);
	}

}else{
	echo json_encode(['statuscode' => 400, 'response' => 'No hay accion']);
}








?>