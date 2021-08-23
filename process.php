<?php

    $confirmorderID=$_GET['id'];
    $conn=mysqli_connect("localhost","simsscho_nabiha","nabiha1234@","simsscho_checkout");
	$query = "UPDATE confirmorders SET Completed='Yes' WHERE ID = '$confirmorderID'";
	$data = mysqli_query($conn, $query);
	if($data){
		echo "updated!";
		?>
		
		<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System/AdminDashboard.php#PendingOrders">
	<?php
	}
?>