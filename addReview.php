<?php
session_start();
   if(!isset($_SESSION['id'])){
	   echo "<script>alert('Login into your account')</script>";
	   
?>
		<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System/AboutUs.php">	   
<?php  
  }else{

   if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $title=$_REQUEST['title'];
   $review=$_REQUEST['review'];
   $rating=$_REQUEST['rating'];
   $userid=$_SESSION['id'];
   $image=$_SESSION['image'];
   $name=$_SESSION['name'];
   $conn=mysqli_connect("localhost","simsscho_nabiha","nabiha1234@","simsscho_feedback");
   $dup=mysqli_query($conn,"SELECT * FROM reviews WHERE UserID='$userid'");
   if(mysqli_num_rows($dup)>0){
	   echo "<script>alert('A review already exists from this account!')</script>";
   }else{
   $sql="INSERT INTO reviews(Title, Review, Rating, UserID, UserName, Image) VALUES('$title', '$review', '$rating', '$userid', '$name', '$image' )";
   $result=mysqli_query($conn,$sql);
   if($result){
	echo "<script>alert('Reivew Published')</script>";

   }
   }
   }
   ?>
   <meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System/AboutUs.php#feedback">	   
<?php 
 }
?>