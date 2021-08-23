<?php
  
   $username=$_REQUEST['email'];
   $password=$_REQUEST['password'];
   if($username == "" && $password == ""){
	   header('location:FoodOrderingSystemMenu.php');
   }
   
   $conn=mysqli_connect("localhost","root","","SignUp");
   
   $result=mysqli_query($conn,"SELECT * FROM signuptable WHERE Email = '$username' AND Password = '$password'");
   
   
   if(mysqli_num_rows($result) > 0){
       $row=mysqli_fetch_array($result);						
	   $ID=$row['ID'];
	   $name=$row['Name'];
	   $image=$row['ProfileImage'];
	   $address=$row['Address'];
	   $email=$row['Email'];
	   $password=$row['Password'];
	   $contact=$row['Contact'];
	   session_start();
	   $_SESSION['id']=$ID;
	   $_SESSION['name']=$name;
	   $_SESSION['image']=$image;
	   $_SESSION['password']=$password;
	   $_SESSION['email']=$email;
	   $_SESSION['address']=$address;
	   $_SESSION['contact']=$contact;
	  // echo "<script>alert('image=".$image."')</script>";
	  
	   echo "<script> location.replace('FoodCart.php?') </script>";
  
   }else{
	   echo "<script>alert('Incorrect username or password')</script>";
   }


?>