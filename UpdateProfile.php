<?php
   session_start();
    if(!isset($_SESSION['id'])){
	   echo "notttt";
	   echo "<script>alert('session not found')</script>";
	}else{
   $ID=$_SESSION['id'];
   $name=$_SESSION['name'];
   $image=$_SESSION['image'];
   $password=$_SESSION['password'];
   $email=$_SESSION['email'];
   $address=$_SESSION['address'];
   $contact=$_SESSION['contact'];
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
      <input type="text"  id="name" placeholder="" name="name" value=<?php echo $name ?> required><br>

      <label for="email"><b>Email</b></label> <br>
      <input type="text" placeholder="" name="email" value=<?php echo $email ?> required><br>
	  
	  <label for="password"><b>Password</b></label> <br>
      <input type="text" placeholder="" name="password" value=<?php echo $password ?> required><br>
	  
	  <label for="price"><b>Contact</b></label> <br>
      <input type="text" placeholder="" name="contact" value=<?php echo $contact ?> required><br>
	  
	  <label for="address"><b>Address</b></label> <br>
      <input type="text" placeholder="" name="address" value=<?php echo $address ?> required><br>
	  
	  <label for="image"><b>Profile Image</b></label> <br>
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
    $conn=mysqli_connect("localhost","simsscho_nabiha","nabiha1234@","simsscho_SignUp");

		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$password=$_REQUEST['password'];
		$contact=$_REQUEST['contact'];
		$address=$_REQUEST['address'];
		$imagee=$_FILES['img']['name'];
		
		if(empty($imagee)){
			$imagee=$_SESSION['image'];
		}
		
		$query="UPDATE signuptable SET Name='$name', Email='$email', Password='$password', Contact='$contact', Address='$address', ProfileImage='$imagee' WHERE ID = '$ID'";
		
		$data = mysqli_query($conn, $query);
		if($data){
			?>
			<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System/FoodCart.php">
		
		<?php
		}else{
			
			echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);
		}
	}
?>
		


