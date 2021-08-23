<?php
    session_start();
    $ID=$_GET['id'];
	$conn=mysqli_connect("localhost","root","","foodcart");
	$query="DELETE FROM carttable WHERE ID = '$ID'";
    
    $data=mysqli_query($conn,$query);
	if($data){
		//echo "<script>alert('Record Deleted')</script>";
	}
		?>
		<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System%20-%20FA18-BCS-081%20-%20FA18-BCS-114/FoodCart.php#table">

