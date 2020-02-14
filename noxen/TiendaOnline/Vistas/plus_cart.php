<?php
	include('session.php');
	if(isset($_POST['add'])){
		$id=$_POST['id'];
		
		
		$query1=mysqli_query($conn,"select * from productos where codpro='$id' ");
		$query2=mysqli_query($conn,"select * from cart where productid='$id'");
		$row2=mysqli_fetch_array($query2);
		$row=mysqli_fetch_array($query1);
		$cantidadcarro=$row2['qty'];
		$cantidad=$row['stock'];
	
if ($cantidad<=$cantidadcarro){echo "La cantidad es mayor al stock!";
} else {
		 
		$query=mysqli_query($conn,"select * from cart where productid='$id'");
		$row=mysqli_fetch_array($query);
		
		$newqty=$row['qty']+1;
		
		mysqli_query($conn,"update cart set qty='$newqty' where productid='$id'");
		
}
		
		
	
	}

?>