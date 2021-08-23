<?php

    $confirmorderID=$_GET['id'];
    $conn=mysqli_connect("localhost","root","","checkout");
	$query = "UPDATE confirmorders SET Completed='Yes' WHERE ID = '$confirmorderID'";
	$data = mysqli_query($conn, $query);
	if($data){
		echo "updated!";
		?>
		
		<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System%20-%20FA18-BCS-081%20-%20FA18-BCS-114/AdminDashboard.php#PendingOrders">
	<?php
	}
?>