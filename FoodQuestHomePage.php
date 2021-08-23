<?php 

  $conn=mysqli_connect("localhost","root","","feedback"); 
  $result = mysqli_query($conn,"SELECT * FROM reviews");

  
?>

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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <div id="button"></div>
  <header>
   
   <div class="container-fluid" style="padding:0px;">
   <nav id="Fixed-NavBar" class="navbar navbar-expand-lg  fixed-top">
   <a class="navbar-brand  navbar-expand-lg"  href="#"><img id="logo" src="Food-Quest-Logo.png"></a>
   <button id="collapse-menu"type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse8">
            <span class="navbar-toggler-icon"></span>
        </button>
   <div class="collapse navbar-collapse" id="navbarCollapse8">
   <ul id="list-inline" class="navbar-nav">
      <li class="navigation" id="nav-element"><a href="FoodQuestHomePage.php" class="nav-item nav-link active">Home</a></li>
	  <li class="navigation" id="nav-element"><a href="AboutUs.php" class="nav-item nav-link">About</a></li>
	  <li class="navigation" id="nav-element"><a href="FoodOrderingSystemMenu.php" class="nav-item nav-link">Menu</a></li>
	  <li class="navigation" id="nav-element"><a class="nav-item nav-link" onclick="document.getElementById('login').style.display='block'">Login</a></li>
	  <li class="navigation" id="nav-element"><a href="#SignUp" class="nav-item nav-link">Sign Up</a></li>
	  <li class="navigation" id="nav-element"><a id="cart" href="FoodCart.php" class="nav-item nav-link"><img class="animate__animated animate__slideInLeft" src="carticon.PNG" style="margin-top:-10px; animation-delay: 0s; animation-duration: 2s"></a></li>
   </ul>
   </div>
   
   </nav>
   </div>
	
 <div id="HeaderCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interh5="1000">
  <ol class="carousel-indicators">
      <li data-target="#HeaderCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#HeaderCarousel" data-slide-to="1"></li>
      <li data-target="#HeaderCarousel" data-slide-to="2"></li>
      <li data-target="#HeaderCarousel" data-slide-to="3"></li>
    </ol>
  <div class="carousel-inner" >
    <div class="carousel-item active">
        <img src="header-bg4.jpg">
		<div class="caption">
   <h1 class="animate__animated animate__slideInDown">Feeling Hungry? </h1>
   <p class="animate__animated animate__fadeInUp" >Why to fear when Food Quest is here!<br><br><a href="FoodOrderingSystemMenu.php"><span  class="animate__animated animate__zoomIn" style="animation-delay:1s;" id="Order-Button">Order it</span ></a>
       <span class="animate__animated animate__fadeInRight" style="animation-delay:1.5s;">Enjoy it!</span></p>
   </div>
	</div>
	<div class="carousel-item">	
        <img src="header-bg1.jpg">
		<div class="caption">
   <h1 >Feeling Hungry? </h1>
   <p >Why to fear when Food Quest is here!<br><br><a href="FoodOrderingSystemMenu.php"><span id="Order-Button">Order it</span ></a>
       <span>Enjoy it!</span></p>
   </div>
	</div>
    <div class="carousel-item" >
      <img src="header-bg2.jpg">
	  <div class="caption">
	  <h1>Feeling Hungry? </h1>
   <p>Why to fear when Food Quest is here!<br><br><a href="FoodOrderingSystemMenu.php"><span id="Order-Button">Order it</span ></a>
       <span>Enjoy it!</span></p>
   </div>
   </div>
    <div class="carousel-item">
       <img src="header-bg3.jpg">
	   <div class="caption">
	   <h1>Feeling Hungry? </h1>
        <p>Why to fear when Food Quest is here!<br><br><a href="FoodOrderingSystemMenu.php"><span id="Order-Button">Order it</span ></a>
             <span>Enjoy it!</span></p>
   </div>
   </div>
  </div>
   <a class="carousel-control-prev text-light" href="#HeaderCarousel" role="button" data-slide="prev">
    <span class="fa fa-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next text-light" href="#HeaderCarousel" role="button" data-slide="next">
    <span class="fa fa-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   </header>
   
   
<div id="login" class="modal">
 
  <form class="modal-content animate" action="login.php" onsubmit="return login()" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="Food-Quest-Logo.PNG" class="img-logo">
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label><br>
      <input type="text" placeholder="Enter Email" name="email" value="" onkeyup="validate(this)"  required >
      <p>Email must be a valid address, e.g. myself@domain.com</p>
	  
      <label for="Pass"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" value="" onkeyup="validate(this)" required>
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
      <a href="Food Quest Home Page.html#SignUp" target=_blank class="new_Account">Create New Account</a></span>
    </div>
  </form>
</div>

   <section class="Home-Page">
      <div class="container" style="padding:60px;">
	      <div class="row">
		      <div class="col-lg-12">
			      <div class="how-it-works">
				     <div class="row justify-content-center">
					     <div class="col-lg-6">
						    <div class="section-title text-center">
                                    <img src="shape.png">
                                    <h3 class="animate__animated animate__bounce">How it work</h3>
                                    <p>Enjoy Our Service in 3 simple easy steps</p>
                            </div>
					     </div>
				     </div>
					 <div class="row justify-content-center">
					     <div class="col-lg-4 col-md-8">
						    <div class="Worinkg-item">
                                    <a href="#">
                                    <h4><img src="icon-1.PNG"> Select the Meal Course </h4></a>
                                    <p>Select which day of the meal you want to enjoy withour fresh and delicious food.</p>
                            </div>
					     </div>
						 <div class="col-lg-4 col-md-8">
						    <div class="Worinkg-item">
                                    <a href="FoodOrderingSystemMenu.php">
                                    <h4><img src="icon-2.png"> Choose Your Meal </h4></a>
                                    <p>Select the meal that statisfies your Tasteful and desire. Choose in how much quantity you want to get it</p>
                            </div>
					     </div>
						 <div class="col-lg-4 col-md-8">
						    <div class="Worinkg-item">
                                    <a href="#">
                                    <h4><img src="icon-3.png"> Delivery </h4></a>
                                    <p>Specify your address details and wait for the delivery.Enjoy your meal with easy acsh on delivery service.</p>
                            </div>
					     </div>
				     </div>
				  </div>
		      </div>
	      </div>
	 </div>					   
 </section>
  
  
  <section class="Select-Meal-Course">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h3>Search by Meal Course Category</h3>
                        <p>Easy way to select the food through categorization</p>
                    </div>
                </div>
            </div>
			
            <div class="row justify-content-center">
			
                <div class="col-lg-4 col-md-7 col-sm-9">
				<div class="box">
                    <div class="category-item">
                       <a href="FoodOrderingSystemMenu.php" target="_blank"> <div class="category-image">
                            <img src="breakfast.JPG" height=500px>
                            <div class="item">
                                <img src="design.PNG" >
                            </div>
                        </div>
                        <div class="category-content text-center">
                            <a href="#">Breakfast Course</a>
                        </div>
                    </div>
					</a>
                </div>
				</div>
                <div class="col-lg-4 col-md-7 col-sm-9">
				<div class="box">
                    <div class="category-item mt-30">
                        <a href="FoodOrderingSystemMenu.php" target="_blank"><div class="category-image">
                            <img src="lunch.JPG">
                            <div class="item">
                                <img src="design.PNG" >
                            </div>
                        </div>
						</a>
                        <div class="category-content text-center">
                            <a href="#">Lunch Course</a>
                        </div>
                    </div>
                </div>
				</div>
                <div class="col-lg-4 col-md-7 col-sm-9">
				<div class="box">
                    <div class="category-item mt-30">
                        <a href="FoodOrderingSystemMenu.php" target="_blank"> <div class="category-image">
                           <img src="dinner.JPG" >
                            <div class="item">
                                <img src="design.PNG" >
                            </div>
                        </div>
						</a>
                        <div class="category-content text-center">
                            <a href="#">Dinner Course</a>
                        </div>
                    </div>
                </div>
				</div>
            </div>
        </div>
    </section>
	
	
	<section class="Register">
	    <div class="row">
		<div class="col-lg-6 col-md-3 col-sm-2"> 
		</div>
		    <div class="col-lg-6 col-md-9 col-sm-10"> 
			    <div class="Register-Box">
				<h2>Want to become part of Food Quest?</h2> 
				<p>Would you like thousands of new customers to Tasteful and enjoy your amazing art of food?So would we!</p><br><br>
				<p>	We would provide you with an oppurtunity to let your amazing food reach among thousands of people.</p><br></br><br></br>
					<p>So what are you waiting for? Register now!. We will list all your food items online, help you process orders, pick them and deliver them to food lover.</p><br></br><br></br>
				
				    
					<br></br> <br></br>
					
					<a href="RegisterForm.php" id="#RegisterButton">Register</a>
					
				</div>
			
			</div>
		<div>
	  
	
	</section>
	<hr style="border:100px solid white;">
	
	<section class="Client-Reviews">
	<img class="heading" src="happy-customer.PNG">
	<div class="row ">
	<div class="col-lg-6 col-md-9 col-sm-12 col-xs-12">
	
	<div class="container">
	
 <div id="ReviewsCarousel" class="carousel slide" data-ride="carousel" data-interh5="2000">
  <ol class="carousel-indicators">
  <?php
     $i=0;
	 foreach($result as $row){
		 $active= '';
		 if($i==0){
			 $active= 'active';
		 }
	
  ?>
  
    <li data-target="#ReviewsCarousel" data-slide-to="0" class="<?php $active; ?>"></li>
	<?php
	  $i++;
	}
	?>
    
  </ol>
  <div class="carousel-inner" >
  <?php
     $i=0;
	 foreach($result as $row){
		 $active= '';
		 if($i==0){
			 $active= 'active';
		 }
	
  ?>
    <div class="carousel-item <?= $active; ?>">
       <h4 class="title"><?= $row['Title'];?></h4>
                            <p class="review"> <span><i class="fa fa-quote-left"></i></span><?= $row['Review'];?><span><i class="fa fa-quote-right"></i></span></p>
                            <?php
							$ratings=$row["Rating"];
							//echo "<script>alert(".$ratings.")</script>";
							$count=0;
							while($count<=$ratings){
							echo '
							<span style="margin-left:50px; "><i class="fa fa-star fa-1x" style="margin-bottom:20px; width:10px;"></i></span>';
							
							$count+=1;
							}
							?>
                            <div class="user mt-40">
                                <div class="user-image">
                                    <img src="<?= $row['Image'];?>">
                                
                                <span class="user-name"><?= $row['UserName'];?></span>
                                <p>Food Lover Customer</p>
                            </div>
    </div>
	</div>
	 <?php 
	  $i++;
	 } ?>
  </div>

  <a class="carousel-control-prev text-dark" href="#ReviewsCarousel" role="button" data-slide="prev">
    <span class="fa fa-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next text-dark" href="#ReviewsCarousel" role="button" data-slide="next">
    <span class="fa fa-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
	
	</div>
	</div>
</section>

<section class="SignUp">
	    <div class="row">
		<div class="col-lg-6 col-md-3 col-sm-2"> 
		</div>
		    <div class="col-lg-6 col-md-9 col-sm-10"> 
			    <div class="SignUp-Box">
				   <div id="SignUp" class="SignUpModule">
				     <form class="SignUpModule-content"  action="" onsubmit="return SignUp()" method="POST" >
					    <div class="container">
      <img class="heading" src="Create-New-Account.PNG">
      <p style="margin-top:-60px; color:grey">Please fill in this form to create an account.</p>
      <hr style=" border: 1px solid #f1f1f1; margin-bottom:25px;">
	  
	  <label for="name"><b>Name</b></label><br>
	 
      <input type="text" id="name" placeholder="Enter your name" name="username" onkeyup="validate(this)" required>
	  <p>Name must only contain alphabets and should atleast contain 2 characters</p>
	  
      <label for="email"><b>Email</b></label><br>
      <input type="text" id="email" placeholder="Enter Email" name="email" onkeyup="validate(this)" required>
	  <p>Email must be a valid address, e.g. myself@domain.com</p>

      <label for="password"><b>Password</b></label><br>
      <input type="password" id="password" placeholder="Enter Password" name="password" onkeyup="validate(this)" required>
	  <p>Password must alphanumeric (@, _ and - are also allowed) and be 8 - 20 characters</p>
	  
	  <label for="contact"><b>Contact No</b></label><br>
      <input type="text" id="contact" placeholder="Enter your Conatct Number" name="contact" onkeyup="validate(this)" required>
	  <p>Contact No must only contain numeric digits and should be 11 digits</p>
	  
	  <label for="Address"><b>Address</b></label><br>
      <input type="text" id="address" placeholder="Enter your Address" name="address" required>
	  <p>Contact No must only contain numeric digits and should be 11 digits</p>

      
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p style="font-size:15px; text-align:left;">By creating an account you agree to our <a href="#" style="color:dodgerblue; background-color:none;">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button id="submitbtn" type="submit" class="signupbtn" >Sign Up</button>
      </div>
    </div>
  </form>
</div>
		</div>
			
			</div>
		<div>
	  
	
	</section>
	<hr style="border:270px solid white;">

<br>


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
    <a href="Food Ordering System Menu.php"> Food Quest.com</a>
  </div>
</footer>
	
	

<script>
$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 50) {
	    $("#Fixed-NavBar").css("background" , "rgba(162,154,84,0.7)");
	  }

	  else{
		  $("#Fixed-NavBar").css("background" , "none");  	
	  }
  })
})

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("Fixed-NavBar").style.padding="0px 0px";
    document.getElementById("logo").style.width="70px"
	document.getElementById("logo").style.height="70px"
	
	
  } else {
    document.getElementById("Fixed-NavBar").style.padding="5px 10px";
    document.getElementById("logo").style.width="100px"
	document.getElementById("logo").style.height="100px"
  }
}


var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
            

(function() {
'use strict';
window.addEventListener('load', function() {

var forms = document.getElementsByClassName('needs-h5idation');
var h5idation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkh5idity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();

const val = {
    
	username:/^[A-Za-z ]{2,999}$/,
    password: /^[A-Za-z0-9@-_]{8,30}$/i,
    email: /^([A-Za-z0-9\.-_]+)@([a-z0-9-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
	contact: /^[0-9]{11}$/		
};


function validate(field){
    if(val[field.name].test(field.value)){
    field.className='valid';
    }
    else{
    field.className='invalid'; 
    }
}


function SignUp(){
     if(val['username'].test(document.getElementById("username").value) && 
		val['email'].test(document.getElementById("email").value) &&
		val['contact'].test(document.getElementById("contact").value) &&
		val['password'].test(document.getElementById("password").value)){	
		alert("true");
	    return true;
	 }else{
		 alert("false");
	 return false;
	 }
  
  }

</script>  
   

</body>
</html>




<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
 
$username= $_REQUEST["username"];
$address= $_REQUEST["address"];
$email= $_REQUEST["email"];
$password= $_REQUEST["password"];
$contact= $_REQUEST["contact"];
$image="icon-4.png";

        $namebool = false;
        $emailbool = false;
        $contactbool = false;
        $passwordbool = false;
		
		if(preg_match("/^[0-9]{11}*$/",$contact)){
			 $contactbool = true;	
		}
		if(preg_match("/^[A-Za-z ]{2,999}*$/",$name)){
            $namebool = true;
        }
		
		if(filter_var($email,FILTER_VALIDATE_EMAIL)){
           
            $emailbool = true;
        }    


$conn=mysqli_connect("localhost","root","","SignUp");
if($conn){
	echo"connected successfully";
}
else{
	echo"failed";
}
$dup=mysqli_query($conn,"SELECT * FROM signuptable WHERE Email='$email'");
if(mysqli_num_rows($dup)>0){
	echo "<script>alert('This Account already exists')</script>";
}
else{
	
	if( $emailbool == true ){
$sql="INSERT INTO signuptable(Name, Email, Password, Contact, Address, ProfileImage) VALUES('$username', '$email', '$password', '$contact', '$address', '$image')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>alert('Account Created')</script>";
	?>
	<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System%20-%20FA18-BCS-081%20-%20FA18-BCS-114/FoodQuestHomePage.php#SignUp">
	<?php
}else{
	echo "notsuccessfully";
}
	}
	else{
		
		echo "<script>alert('Enter valid data')</script>";
	}
}
}
 ?>
