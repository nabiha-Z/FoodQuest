<?php
   session_start();
    if(!isset($_SESSION['id'])){
	   echo "notttt";
	   echo "<script>alert('session not found')</script>";
	}else{

   $ID=$_SESSION['id'];
   $firstname=$_SESSION['firstname'];
   $lastname=$_SESSION['lastname'];
   $image=$_SESSION['image'];
   $password=$_SESSION['password'];
   $email=$_SESSION['email'];
   $city=$_SESSION['City'];
   $address= $_SESSION['ResAddr'];
   $contact=$_SESSION['contact'];
   $ResturantName= $_SESSION['ResName'];
   $ResturantAddress=$_SESSION['ResAddr'];	
	   
   }
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
      <label for="username">Name</label><br>
      <input type="text"  id="name" placeholder="" name="firstname" value=<?php echo $firstname ?> required><br>
	  
	  <label for="username">Name</label><br>
      <input type="text"  id="name" placeholder="" name="lastname" value=<?php echo $lastname ?> required><br>

      <label for="email"><b>Email</b></label> <br>
      <input type="text" placeholder="" name="email" value=<?php echo $email ?> required><br>
	  
	  <label for="password"><b>Password</b></label> <br>
      <input type="text" placeholder="" name="password" value=<?php echo $password ?> required><br>
	  
	  <label for="price"><b>Contact</b></label> <br>
      <input type="text" placeholder="" name="contact" value=<?php echo $contact ?> required><br>
	  
	  <label for="image"><b>Profile Image</b></label> <br>
      <input type="file" id="img" name="img" value=<?php echo $image ?> accept="image/*"> <br>
	  
	  <label for="City"><b>City</b></label> <br>
      <input type="text" placeholder="" name="city" value=<?php echo $city ?> required><br>
	  
	  <label for="ResturantName"><b>Resturant Name</b></label> <br>
      <input type="text" placeholder="" name="resturantname" value=<?php echo $ResturantName ?> required><br>
	  
	  <label for="address"><b>Resturant Address</b></label> <br>
      <input type="text" placeholder="" name="address" value=<?php echo $ResturantAddress ?> required><br>
	  
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
    $conn=mysqli_connect("localhost","root","","register");
        
		$firstname=$_REQUEST['firstname'];
		$lastname=$_REQUEST['lastname'];
		$email=$_REQUEST['email'];
		$password=$_REQUEST['password'];
		$contact=$_REQUEST['contact'];
		$address=$_REQUEST['address'];
		$city=$_REQUEST['city'];
		$ResturantName=$_REQUEST['resturantname'];
		$ResturantAddress=$_REQUEST['address'];
		$imagee=$_FILES['img']['name'];
		
		if(empty($imagee)){
			$imagee=$_SESSION['image'];
		}
		
		$query="UPDATE registertable SET FirstName='$firstname', LastName='$lastname', Email='$email', Password='$password', Contact='$contact', ResturantAddress='$address', ResturantName='$ResturantName', ProfileImage='$imagee' WHERE ID = '$ID'";
		
		$data = mysqli_query($conn, $query);
		if($data){
			echo "dedwede";
			?>
			<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System%20-%20FA18-BCS-081%20-%20FA18-BCS-114/AdminDashboard.php">
		
		<?php
		}else{
			echo "fefrfrfr";
			echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);
		}
	}
?>
		


