<?php
	session_start();
	
	if (!isset($_SESSION['c3_id']) ||(trim ($_SESSION['c3_id']) == '')) {
	header('location:../index.php');
    exit();
	}
	
	include('../conn.php');

	$sq=mysqli_query($conn,"select * from `user` where id_user='".$_SESSION['c3_id']."'");
	$srow=mysqli_fetch_array($sq);
	
	$user=$srow['name_user'];
	$mailuser=$srow['mail_user'];
	$iduser=$srow['id_user'];
	
?>