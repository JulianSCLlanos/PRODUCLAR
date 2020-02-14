<?php
include('session.php');


	session_unset(); //LIMPIAR VARIABLES DE SESIÓN
		session_destroy();
		$_SESSION['c3_id'] = false;

	header ("Location: login.php");

?>