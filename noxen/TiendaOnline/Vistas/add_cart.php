<?php
	include('session.php');
	if(isset($_POST['cart'])){
		$id=$_POST['id'];
		$qty=$_POST['qty'];

		$query=mysqli_query($conn,"select * from cart where productid='$id' and userid='".$_SESSION['c3_id']."'");
		$query1=mysqli_query($conn,"select * from productos where codpro='$id' ");
		
		if (mysqli_num_rows($query)>0){
			echo "Producto ya en su carrito!";
		}
		
	else{
		
		
		
		
$row=mysqli_fetch_array($query1);
    $cantidad=$row['stock'];
	
if ($cantidad<$qty){echo "La cantidad es mayor al stock!";
}
else {

			mysqli_query($conn,"insert into cart (userid, productid, qty) values ('".$_SESSION['c3_id']."', '$id', '$qty')");
}}
	}

?>
