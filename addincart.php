<?php
  
  $ID=$_GET['id'];
  $foodname=$_GET["name"];
  $price=$_GET["price"];
  $image=$_GET["image"];
  $description=$_GET["desc"];
  $resturant=$_GET["resturant"];
  
 session_start();
   if(!isset($_SESSION['id'])){
	   
	   echo "<script>alert('Login into your account')</script>";
	  
     echo '<html>
	 <head>
	 <link rel="stylesheet" href="FOS Styling.css">
	 </head>
	 <style>
	 .modal{
		 display:block;
	 }
	 </style>
	 <body>
	 <div id="login" class="modal">
 
  <form class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
      
      <img src="Food-Quest-Logo.PNG" class="img-logo">
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label><br>
      <input type="text" placeholder="Enter Username" name="email" onkeyup="validate(this)"  required >
      <p>Email must be a valid address, e.g. myself@domain.com</p>
	  
      <label for="Pass"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" onkeyup="validate(this)" required>	
	  <p>Password must alphanumeric (@, _ and - are also allowed) and be 8 - 20 characters</p>
	  
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
	  <br>
	  <p class="Pass">Forgot <a href="#">password?</a></p>
	  
    </div>

    <div class="container" id="footer">
      
      <a href="FoodQuestHomePage.php#SignUp" target=_blank class="new_Account">Create New Account</a></span>
    </div>
  </form>
</div>



</body>
</html>';
   
   }else{
   
  
  $conn=mysqli_connect("localhost","root","","foodcart");
  //if($conn){
	//  echo"connected successfully";
	  //}
	  //else{
		//  echo "failed";
		  //}
  
 $sql="";
  $userid=$_SESSION['id'];
  $dup=mysqli_query($conn,"SELECT * FROM carttable WHERE ItemID='$ID' AND UserID='$userid'");
  if(mysqli_num_rows($dup) > 0){
	  $row=mysqli_fetch_array($dup);
	   $foodn=$row['ItemName']; 
	  $quantity=$row['Quantity'];
	  $quantity+=1;
	  echo "update";
	  $sql="UPDATE carttable SET Quantity = '$quantity' WHERE ItemName='$foodname' AND UserID='$userid'";    
  }else{
	  $quantity=1;
	   $sql="INSERT INTO carttable(ItemID, ItemName, ItemImage, Price,Quantity, Size,UserID, Resturant) VALUES('$ID', '$foodname','$image', '$price', $quantity,'$description','$userid','$resturant')";
  }

 

$r=mysqli_query($conn,$sql);
if($r){
	echo "<script>alert('Added to Cart')</script>";
	?>
	
	<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System%20-%20FA18-BCS-081%20-%20FA18-BCS-114/FoodOrderingSystemMenu.php#foodmenu">
<?php
}
else{
	echo "Not added";
	echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);

}
}
  
?>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $username=$_REQUEST['email'];
   $password=$_REQUEST['password'];
   echo $username;
   
   $conn=mysqli_connect("localhost","root","","SignUp");
   
   $result=mysqli_query($conn,"SELECT * FROM signuptable WHERE Email = '$username' AND Password = '$password'");
  
   if($username == "" && $password == ""){
	   header('location:FoodOrderingSystemMenu.php');
   }
   if(mysqli_num_rows($result) > 0){
       $row=mysqli_fetch_array($result);						
	   echo "Loged in";  
	   $ID=$row['ID'];
	   $name=$row['Name'];
	   $image=$row['ProfileImage'];
	   $address=$row['Address'];
	   session_start();
	   $_SESSION['id']=$ID;
	   $_SESSION['name']=$name;
	   $_SESSION['image']=$image;
	   $_SESSION['address']=$address;
	   
	  echo $_SESSION['id'];
	  // echo "<script>alert('image=".$image."')</script>";
	  
	   echo "<script> location.replace('addincart.php?name=".$foodname."& image=".$image."& price=".$price."& desc=".$description."') </script>";
  
   }else{
	   echo "Failed";
   }
}


?>
