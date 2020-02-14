<?php

include_once '../Utils/db.php';

/**
 * 
 */
class productos extends DB{


	   function __construct(){
           parent::__construct();
   		 }

	public function get ($codpro){
		$query = $this -> connect ()->prepare('SELECT * FROM productos WHERE codpro = :codpro LIMIT 0,12');

		$query->execute(['codpro'=> $codpro]);
		$row = $query->fetch();
		return [
			'codpro'		=> $row['codpro'],
			'descripcion'	=>$row['descripcion'],
			'precio'		=>$row['precio'], 
			'stock'			=>$row['stock'],
			'Tamaño'		=>$row['Tamaño'],
			'detalle'		=>$row['detalle'],
			'imagen'		=>$row['imagen'],


		];
	}
}




?>