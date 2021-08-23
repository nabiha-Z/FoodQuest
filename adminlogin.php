<?php

   $username=$_REQUEST['email'];
   $password=$_REQUEST['password'];
   if($username == "" && $password == ""){
	   header('location:Register.php#AdminLogin');
   }
   
   $conn=mysqli_connect("localhost","root","","register");
   
   
   $result=mysqli_query($conn,"SELECT * FROM registertable WHERE Email = '$username' AND Password = '$password'");

   if(mysqli_num_rows($result) > 0){
       $row=mysqli_fetch_array($result);
	   $ID=$row['ID'];
	   $firstname=$row['FirstName'];
	   $lastname=$row['LastName'];
	   $image=$row['ProfileImage'];
	   $email=$row['Email'];
	   $password=$row['Password'];
	   $contact=$row['Contact'];
	   $city=$row['City'];
	   $ResturantName=$row['ResturantName'];
	   $ResturantAddress=$row['ResturantAddress'];
	   session_start();
	   
	   $_SESSION['id']=$ID;
	   $_SESSION['firstname']=$firstname;
	   $_SESSION['lastname']=$lastname;
	   $_SESSION['image']=$image;
	   $_SESSION['password']=$password;
	   $_SESSION['email']=$email;
	   $_SESSION['City']=$city;
	   $_SESSION['contact']=$contact;
	   $_SESSION['ResName']=$ResturantName;
	   $_SESSION['ResAddr']=$ResturantAddress;
	
	  // echo "<script>alert('image=".$image."')</script>";
	  
	   echo "<script> location.replace('AdminDashboard.php?') </script>";
  
   }else{
	  echo "<script>alert('Incorrect username or password')</script>";
	    ?>
	  <meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System%20-%20FA18-BCS-081%20-%20FA18-BCS-114/RegisterForm.php#AdminLogin">
	
	  <?php
   }


?>
