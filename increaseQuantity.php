<?php
    session_start();
    $ID=$_GET['id'];
	$increase=$_GET['inc'];
	$decrease=$_GET['dec'];
	$quantity=$_GET['quantity'];
	$conn=mysqli_connect("localhost","root","","foodcart");
	
	if($increase == 0){
		$quantity-=1;
		
	}else{
		$quantity+=1;
	}
	
	if($quantity < 1){
		$quantity=1;
	}
	 $query="UPDATE carttable SET Quantity = '$quantity' WHERE ID= '$ID'";
    
    $data=mysqli_query($conn,$query);
	if($data){
		//echo "<script>alert('Record Deleted')</script>";
	}
		?>
		<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System%20-%20FA18-BCS-081%20-%20FA18-BCS-114/FoodCart.php#table">

