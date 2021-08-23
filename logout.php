<?php
   session_start();
   if(session_destroy()){
	   echo "<script>alert('session Destroyed')</script>";
	   header('Location: FoodQuestHomePage.php');
  }
?>
