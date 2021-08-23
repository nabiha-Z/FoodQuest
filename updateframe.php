<?php
   $ID=$_GET['id'];
   $productname=$_GET['productname'];
   $image=$_GET['image'];
   $price=$_GET['price'];
   $description=$_GET['description'];
   $genre=$_GET['genre'];
   $details=$_GET['details'];
   $ratings=$_GET['ratings'];
   echo $ID . "<br>";
   session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard Style.css">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
	</head>
	<body>

<div id="updateItem" class="modal">
  
  <form class="modal-content animate" enctype="multipart/form-data" action="" onsubmit="true" method="POST">
    <div class="imgcontainer">
     
      <img src="Food-Quest-Logo.PNG" class="img-logo">
	  <h5 style="color:#E3D398">Update Form</h5>
    </div>

    <div class="container">
      <label for="username">Product Name</label><br>
      <input type="text"  id="name" name="itemname" value=<?php echo $productname ?> required><br>

      <label for="desc"><b>Description</b></label> <br>
      <input type="text" placeholder="" name="description" value=<?php echo $description ?> required><br>
	  
	  <label for="Genre"><b>Genre</b></label> <br>
      <input type="text" placeholder="" name="genre" value=<?php echo $genre ?> required><br>
	  
	  <label for="detail"><b>Details</b></label> <br>
      <input type="text" name="detail" value=<?php echo $details ?> required><br>
	  
	  <label for="price"><b>Price</b></label> <br>
      <input type="text" placeholder="price" name="price" value=<?php echo $price ?> required><br>
	  
	  <label for="image"><b>Item Image</b></label> <br>
      <input type="file" id="img" name="img" value=<?php echo $image ?> accept="image/*">
	  
    </div>

    <div class="container" id="footer">
      <button type="submit" name="submit" class="new_Account">Update Item</button>
	  
    </div>
  </form>
</div>	
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $conn=mysqli_connect("localhost","simsscho_nabiha","nabiha1234@","simsscho_fooditems");

		
	    $foodname= $_REQUEST["itemname"];
		$foodimage= $_FILES["img"]["name"];
		$price= $_REQUEST["price"];
		$description= $_REQUEST["description"];
		$detail= $_REQUEST["detail"];
		$genre= $_REQUEST["genre"];
		$userID=$_SESSION['id'];
		$resturantname=$_SESSION['ResName'];
		
		
		if(empty($imagee)){
			$imagee=$image;
		}
		echo $userID . "<br>";
		$query="UPDATE items SET Name='$foodname', Description='$description', Genre = '$genre', Detail='$detail', Price='$price', Image='$imagee', AdminId = '$userID', Resturant = '$resturantname' WHERE ID = '$ID'";
		
		$data = mysqli_query($conn, $query);
		if($data){
			echo $detail;
			echo "dedwede";
			?>
			<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System/AdminDashboard.php#Products">
		
		<?php
		}else{
			echo "fefrfrfr";
		}
	}
?>
		


