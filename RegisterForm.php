<!DOCTYPE html>
<html lang="en">
<head>
<title>Food Quest Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="FOS Styling.css">
<link rel="stylesheet" href="animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>

body {
    font-family: 'Lato', sans-serif;
}
</style>

<body>
  <div id="button"></div>
   
   <div class="container-fluid" style="height:170px;">
   <nav id="Fixed-NavBar" class="navbar navbar-expand-lg  fixed-top" style="background-color:rgba(162,154,84,0.7)">
   <a class="navbar-brand  navbar-expand-lg"  href="#"><img id="logo" src="Food-Quest-Logo.png"></a>
   <button id="collapse-menu"type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse8">
            <span class="navbar-toggler-icon"></span>
        </button>
   <div class="collapse navbar-collapse" id="navbarCollapse8">
   <ul id="list-inline" class="navbar-nav">
      <li class="navigation" id="nav-element"><a href="FoodQuestHomePage.php" class="nav-item nav-link ">Home</a></li>
	  <li class="navigation" id="nav-element"><a href="About Us.html" class="nav-item nav-link">About</a></li>
	  <li class="navigation" id="nav-element"><a href="FoodOrderingSystemMenu.php" class="nav-item nav-link">Menu</a></li>
	  <li class="navigation" id="nav-element"><a class="nav-item nav-link active" onclick="document.getElementById('login').style.display='block' " >Login</a></li>
	  <li class="navigation" id="nav-element"><a href="FoodQuestHomePage.php#SignUp" class="nav-item nav-link">Sign Up</a></li>
	  <li class="navigation" id="nav-element"><a id="cart" href="FoodCart.php" class="nav-item nav-link"><img class="animate__animated animate__slideInLeft"src="carticon.PNG" style="margin-top:-10px; animation-delay: 0s; animation-duration: 2s"></a></li>
   </ul>
   </div>
   
   </nav>
   </div>
      <h1 id="title" >Registration Page</h1>               
   
   
    
	<section class="Register">
	    <div class="row">
		<div class="col-lg-6 col-md-3 col-sm-2"> 
		</div>
		    <div class="col-lg-6 col-md-9 col-sm-10"> 
			    <div class="Register-Box">
				<h2>Want to become part of Food Quest?</h2> 
				<p>Would you like thousands of new customers to Tasteful and enjoy your amazing art of food?So would we!</p><br><br>
				<p>	We would provide you with an oppurtunity to let your amazing food reach among thousands of people.</p><br></br><br></br>
					<p>So what are you waiting for? Register now using the below form!.</p><br></br>
					
				</div>
			
			</div>
		<div>
	</section>
	
	<section class="Register-Box-Background">
	<div class="container">
      <div class="Already-Registered-Box" id="AdminLogin">
	       <h2><i class="fa fa-check-circle-o"></i>Already Registered?</h2>
		   <a onclick="document.getElementById('login').style.display='block'" > <p class="Admin-Login-btn">Login</p></a>
	  </div>
   
   </div>
   
	<div class="container">
	<h1 id="title">Registration Form</h1>
	<p class="text">Get your food items registered now by fiiling the fields in the below form</p>
	</div>
	
	
   <div class="container" id="Registration-Form-Box">
      <div class="Form-Box" style="text-align:center">
	       <img src="Food-Quest-Logo.PNG">
		   
		   <form action="" onsubmit="return Register()" id="RegisterForm" enctype="multipart/form-data" method="POST">
		   <div class="form-col justify-content-center">
             <div class="col-md-12 mb-3 md-form">
      <label for="username">First Name</label><br>
      <input type="text"  id="firstName" placeholder="First name" name="firstName" onkeyup="validate(this)" required>
	  <p>Enter Valid Name e.g:Amir and must only contain alphabets and should be 3 - 15 characters</p>
	  <br>
	  </div>
	  <div class="col-md-12 mb-3 md-form">
      <label for="firstName">Last Name</label><br>
      <input type="text"  id="lastName" placeholder="Last name" name="lastName" onkeyup="validate(this)" required>
	  <p>Enter Valid Name e.g:Abid and must only contain alphabets and should be 6 - 15 characters</p>
    </div>
    <div class="col-md-12 mb-3 md-form">
      <label for="email"><b>Email</b></label><br>
      <input type="text" id="email" placeholder="Enter Email" name="email" onkeyup="validate(this)" required>
	  <p>Email must be a valid address, e.g. myself@domain.com</p>
	  
    </div>
	<div class="col-md-12 mb-3 md-form">
      <label for="password"><b>Password</b></label><br>
      <input type="password" id="password" placeholder="Enter Password" name="password" onkeyup="validate(this)" required>
	  <p>Password should br 8 - 20 characters. Space is not allowed</p>
	  
    </div>
    <div class="col-md-12 mb-3 md-form">
      <label for="contact"><b>Contact No</b></label><br>
      <input type="text" id="contact" placeholder="Enter your Conatct Number" name="contact" onkeyup="validate(this)" required>
	  <p>Contact No must only contain numeric digits and should be 11 digits</p>
    </div>
  </div>
  <div class="form-col">
    <div class="col-md-12 mb-3 md-form">
      <label for="City">City</label><br>
      <input type="text" id="city" placeholder="Enter City name e.g: Islamabad" name="city" onkeyup="validate(this)" required>
	  <p>City name could only contain alphabets</p>
    </div>
    <div class="col-md-12 mb-3 md-form">
      <label for="ResturantName">Resturant Name</label><br>
      <input type="text" id="ResturantName" placeholder="Enter Your Resturant Name. e.g:Pizza Hut" name="ResturantName" onkeyup="validate(this)" required> 
      <p>Enter a valid resturant name . It can contain alphanumeric digits and special characters (-, _, @,&,*,!,?,\,/,.,,)</p>
	</div>
	 <div class="col-md-12 mb-3 md-form">
      <label for="Address">Resturant Address</label><br>
      <input type="text" placeholder="Enter Your Resturant Location" id="ResturantAdd" name="ResturantAdd" onkeyup="validate(this)" required>
      <p> Enter a valid address. It can contain digits and alphabets</p>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check pl-0">
      <input class="form-check-input" type="checkbox" value="" checked required>
      <label class="form-check-label">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <button id="btn-submit" class="btn btn-primary btn-sm btn-rounded" type="submit" >Submit form</button>
</form>
	  </div>
   
   </div>
   </section>
   
<div id="login" class="modal">
 
  <form class="modal-content animate" action="adminlogin.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
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
      <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
      <a href="Register.php#RegisterForm" target=_blank class="new_Account">Create New Account</a></span>
    </div>
  </form>
</div>
   
 <footer class="Footer">
  <div class="container">
    <div class="row justify-content-center">
	   <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12  mt-3">
	   <h3>About Us</h3>
	       <ul>
		     <li><a href="#" class="About"><i class="fa fa-map-marker"></i>About Us</a></li>
			 <li><a href="#" class="About"><i class="fa fa-envelope"></i>query@foodquest.com</a></li>
			 <li><a href="#" class="About"><i class="fa fa-handshake-o"></i>We are Hiring</i></a></li>
		   </ul>
	   </div>
	   <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 mt-3">
	       <h3>Service Hours</h3>
		   <ul class="Service-Hours">
		      <li><p>Monday <span> ------------ 12:00pm -12:00 am</span><p>  </li>
		      <li><p>Tuesday <span> ----------- 12:00pm -12:00 am</span><p>  </li>
		      <li><p>Wednesday<span>-------- 12:00pm -12:00 am</span><p>  </li>
		      <li><p>Thursday<span> ---------- 12:00pm -12:00 am</span><p>  </li>
		      <li><p>Friday <span> -------------- 12:00pm -12:00 am</span><p>  </li>
		      <li><p>Saturday <span> ------------ 10:00pm -1:00 am</span><p>  </li>
		      <li><p>Sunday <span> -------------- 10:00pm -1:00 am</span><p>  </li>
			</ul>
		</div>
		<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mt-3">
	       <h3>Follow us on Instagram</h3> 
		   <ul>
		      <li class="instagram-pictures">
			  <div class="image-container">
			  <a href="#"><img src="footer-image-1.JPG"><div class="overlay">
                  <a href="#" class="icon">
                     <i id="instagram" class="fa fa-instagram"></i>
                  </a></div> </div></li>
				  
			  <li class="instagram-pictures">
			  <div class="image-container">
			  <a href="#"><img src="footer-image-2.JPG"><div class="overlay">
                  <a href="#" class="icon">
                     <i id="instagram" class="fa fa-instagram"></i>
                  </a></div> </div></li>
		    <li class="instagram-pictures">
			  <div class="image-container">
			  <a href="#"><img src="footer-image-3.JPG"><div class="overlay">
                  <a href="#" class="icon">
                     <i id="instagram" class="fa fa-instagram"></i>
                  </a></div> </div></li>
			
			</ul>
		   <ul>
		      <li class="instagram-pictures">
			  <div class="image-container">
			  <a href="#"><img src="footer-image-4.JPG"><div class="overlay">
                  <a href="#" class="icon">
                     <i id="instagram" class="fa fa-instagram"></i>
                  </a></div> </div></li>
				  
			  <li class="instagram-pictures">
			  <div class="image-container">
			  <a href="#"><img src="footer-image-5.JPG"><div class="overlay">
                  <a href="#" class="icon">
                     <i id="instagram" class="fa fa-instagram"></i>
                  </a></div> </div></li>
				  
			  <li class="instagram-pictures">
			  <div class="image-container">
			  <a href="#"><img src="footer-image-6.JPG"><div class="overlay">
                  <a href="#" class="icon">
                     <i id="instagram" class="fa fa-instagram"></i>
                  </a></div> </div></li>
			</ul>
		</div>
		
<hr style="width:100%; border:1px solid #646362; margin-top:90px;">
<div class="footer-copyright text-center py-3">© 2020 Copyright: 
    <a href="Food Ordering System.html"> Food Quest.com</a>
  </div>
</footer>
<script>

const val = {
    
	firstName:/^[A-Za-z ]{2,999}$/,
	lastName:/^[A-Za-z ]{2,999}$/,
    password: /^[A-Za-z0-9@-_]{8,20}$/i,
    email: /^([a-z0-9\.-]+)@([a-z0-9-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
	contact: /^[0-9]{11}$/,
	ResturantName:  /^[A-Za-z0-9-_@&*!?\/., ]{2,999}$/,
	ResturantAdd:  /^[A-Za-z0-9-_@ ]{3,999}$/,
	city: /^[A-Za-z ]{5,20}$/;
     	
};

function validate(field){
    if(val[field.name].test(field.value)){
    field.className='valid';
    }
    else{
    field.className='invalid'; 
    }
}
  
  function Register(){
     if(val['firstName'].test(document.getElementById("firstName").value) && 
	    val['lastName'].test(document.getElementById("lastName").value) &&
		val['email'].test(document.getElementById("email").value) &&
		val['contact'].test(document.getElementById("contact").value) &&
		val['city'].test(document.getElementById("city").value) &&
		val['ResturantAdd'].test(document.getElementById("ResturantAdd").value) &&
		val['ResturantName'].test(document.getElementById("ResturantName").value)){
	    return true;
	 }else{
	 return false;
	 }
  
  }

</script>
<body>
</html>

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
 
$firstname= $_REQUEST["firstName"];
$lastname= $_REQUEST["lastName"];
$email= $_REQUEST["email"];
$password= $_REQUEST["password"];
$contact= $_REQUEST["contact"];
$city=$_REQUEST["city"];
$restName=$_REQUEST["ResturantName"];
$restAddr= $_REQUEST["ResturantAdd"];

        $namebool = false;
        $emailbool = false;
        $contactbool = false;
        $passwordbool = false;
		
		if(preg_match("/^[a-zA-Z ]*$/",$contact)){
			 $contactbool = true;	
		}
		
		if(filter_var($email,FILTER_VALIDATE_EMAIL)){
           
            $emailbool = true;
        }    


$conn=mysqli_connect("localhost","root","","register");
if($conn){
	echo"connected successfully";
}
else{
	echo"failed";
}
$dup=mysqli_query($conn,"SELECT * FROM registertable WHERE Email='$email'");
if(mysqli_num_rows($dup)>0){
	echo "<script>alert('This Account already exists')</script>";
	?>
	<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System%20-%20FA18-BCS-081%20-%20FA18-BCS-114/RegisterForm.php#RegisterForm">
	<?php
}
else{
	
$sql="INSERT INTO registertable(FirstName, LastName, Email, Password, Contact, City, ResturantName, ResturantAddress, ProfileImage) VALUES('$firstname', '$lastname', '$email', '$password', '$contact', '$city', '$restName','$restAddr', 'icon-4.png')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>alert('Registered')</script>";
	?>
	<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System%20-%20FA18-BCS-081%20-%20FA18-BCS-114/RegisterForm.php#RegisterForm">
	<?php
}else{
	echo "notsuccessfully";
}
	}
	
}

 ?>

   
   
   