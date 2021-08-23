<!DOCTYPE html>
<html lang="en">
<head>
<title>Food Quest Menu</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
.caption input[type=text]{
  width: 24%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border:2px solid rgba(39, 155, 121  ,0.9) ;
  border-radius:50px;
  box-sizing: border-box;
  margin-left:35%;
  background-color:rgba(64, 63, 62 , 0.7);
}
.fa-search{
	background-color:rgba(39, 155, 121  ,1);
	color:white;
	border-radius:50px;
	padding:20px;
	margin-left:-50px;
}

</style>
<body>
   <div id="button"></div>
   <header>   
   <div class="container-fluid" style="padding:0px;">
   <nav id="Fixed-NavBar" class="navbar navbar-expand-lg  fixed-top">
   <a class="navbar-brand  navbar-expand-lg"  href="Food Quest Home Page.html"><img id="logo" src="Food-Quest-Logo.png"></a>
   <button id="collapse-menu"type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse8">
            <span class="navbar-toggler-icon"></span>
        </button>
   <div class="collapse navbar-collapse" id="navbarCollapse8">
   <ul id="list-inline" class="navbar-nav">
      <li class="navigation"><a href="FoodQuestHomePage.php" class="nav-item nav-link">Home</a></li>
	  <li class="navigation"><a href="AboutUs.php" class="nav-item nav-link">About</a></li>
	  <li class="navigation"><a href="FoodOrderingSystemMenu.php" class="nav-item nav-link active">Menu</a></li>
	  <li class="navigation"><a class="nav-item nav-link" onclick="document.getElementById('login').style.display='block'">Login</a></li>
	  <li class="navigation" id="nav-element"><a href="FoodQuestHomePage.php#SignUp" class="nav-item nav-link">Sign Up</a></li>
	  <li class="navigation"><a id="cart" href="FoodCart.php" class="nav-item nav-link"><img src="carticon.PNG" style="margin-top:-10px;"></a></li>
   </ul>
   </div>
   
   </nav>
   <div class="caption">
   <h1 class="animate__animated animate__slideInDown">Feeling Hungry? </h1>
    <p class="animate__animated animate__fadeInUp">Why to fear when Food Quest is here!<br><br><a href="FoodOrderingSystemMenu.php"><span  class="animate__animated animate__zoomIn" style="animation-delay:1s;" id="Order-Button">Order it</span ></a>
       <span class="animate__animated animate__fadeInRight" style="animation-delay:1.5s;">Enjoy it!</span></p>
	   <form action="search.php#foodmenu" method="POST"  class="animate__animated animate__fadeInUp">
	        <input type="text" placeholder="Search for food/ Resturant" name="search" id="search"><a type="submit" class="animate__animated animate__zoomIn" ><i class="fa fa-search"></i><a>
	   </form>
	    
   </div>
   </div>
</header>

 
<section>
<div class="container-fluid" style="padding:100px;">

<br></br>
<h1 class="title-tag">Popular Dishes</h1>

<p>Choose from over 100 plus dishes from your favourite resturaunt to deal with your hunger</p>
<p>Don’t love what you ordered? Let us know. We’re all about second chances.</p>

<div style=" padding:0px;"class="container-fluid text-center" id="foodmenu">
<div class="row mx-auto my-auto">
                    <div class="row">
                        
						<?php
						$conn=mysqli_connect("localhost","simsscho_nabiha","nabiha1234@","simsscho_fooditems");
						$sql = "SELECT * FROM items";
						$selectresult = mysqli_query($conn, $sql);
						$count=1;
						if(mysqli_num_rows($selectresult) > 0){
						
							while($row = mysqli_fetch_assoc($selectresult)) {
			$inc=0;
			$ID=$row["ID"];
			$name=$row["Name"];
			$description=$row["Description"];
			$detail=$row["Detail"];
			$image=$row["Image"];
			$price=$row["Price"];
			$resturant=$row["Resturant"];
			$ratings=$row["AverageRating"];
			echo'
			
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                   <div class="card mb-2">
                     <img class="card-img-top" src="'.$image.' "height=170px> 
                <div class="card-body">
				
				
                  <h4 class="card-title">'.$name. '<span class="add-to-cart-button"><a href="addincart.php?id='.$ID.'& name='.$name.'& image='.$image.'& price='.$price.'& desc='.$description.' &resturant='.$resturant.'" style="color: white; text-decoration:none;" >Add to Cart</a></span></h4>
				  ';
				  while($inc != $ratings){
					  echo '<i class="fa fa-star fa-1x" style="width:20px; color:#D8B734; margin-left:-1px; margin-bottom:20px;" ></i>';
					  $inc++;
				  }
						echo '	<p class="description">'. $description. '</p>';
							if($detail != ""){
							   echo '<p class="description" style="font-size:13px;">'. $detail. '</p>';
							}else{
							   echo '<p class="description"><br></p>';
							}
							echo '<p class="description">'. $resturant. '</p>
                  <p class="card-text">Rs.'. $price. '<span>maximum<span></p>
                  
                </div>
              </div>
                        </div>
						
			';
		}
	}
						?>
                           
                        </div>
                        </div>
                        </div>
			<br></br>
				
				</div>
			
			
 </section>	


<footer class="Footer" id="footer">
  <div class="container">
    <div class="row justify-content-center">
	   <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12  mt-3">
	   <h3>About Us</h3>
	       <ul>
		     <li><a href="#" class="About"><i class="fa fa-map-marker"></i>About Us</a></li>
			 <li><a href="#" class="About"><i class="fa fa-envelope"></i>query@foodquest.com</a></li>
			 <li><a href="#" class="About"><i class="fa fa-handshake-o"></i>We are Hiring</i></a></li>
		   </ul>
	   </div>
	   <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 mt-3">
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
		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 mt-3">
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
    <a href="FoodOrderingSystem.php"> Food Quest.com</a>
  </div>
  </div>
  </div>
</footer>
	



<div id="login" class="modal">
 
  <form class="modal-content animate" action="login.php" onsubmit="return login()" method="POST">
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
      <a href="Food Quest Home Page.html#SignUp" target=_blank class="new_Account">Create New Account</a></span>
    </div>
  </form>
</div>


<div id="AddToCart" class="modal">
<div class="modal-content animate" >
<div class="imgcontainer">
      <span onclick="document.getElementById('AddToCart').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
   <h1><i class="fa fa-check-circle" style="color:green; font-size:100px;"></i></h1>
   <h2>Added to cart</h2>
   <button  type="submit" onclick="document.getElementById('AddToCart').style.display='none'" class="cancelbtn">Close</button>
</div>
</div>

<br>


<script>



$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 80) {
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
    document.getElementById("logo").style.width="85px"
	document.getElementById("logo").style.height="85px"
	
	
  } else {
    document.getElementById("Fixed-NavBar").style.padding="15px 10px";
    document.getElementById("logo").style.width="120px"
	document.getElementById("logo").style.height="120px"
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



const val = {
	email: /^([a-z0-9\.-]+)@([a-z0-9-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
    password: /^[A-Za-z0-9@-_]{8,30}$/i	
};


function validate(field){
    if(val[field.name].test(field.value)){
    field.className='valid';
    }
    else{
    field.className='invalid'; 
    }
}
function login(){
     if(val['email'].test(document.getElementById("email").value) &&
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
