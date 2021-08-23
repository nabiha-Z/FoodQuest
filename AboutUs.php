
<?php
  session_start();
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
      <li class="navigation" id="nav-element"><a href="FoodQuestHomePage.php" class="nav-item nav-link ">Home</a></li>
	  <li class="navigation" id="nav-element"><a href="AboutUs.php" class="nav-item nav-link active">About</a></li>
	  <li class="navigation" id="nav-element"><a href="FoodOrderingSystemMenu.php" class="nav-item nav-link">Menu</a></li>
	  <li class="navigation" id="nav-element"><a class="nav-item nav-link" onclick="document.getElementById('login').style.display='block'">Login</a></li>
	  <li class="navigation" id="nav-element"><a href="FoodQuestHomePage.php#SignUp" class="nav-item nav-link">Sign Up</a></li>
	  <li class="navigation" id="nav-element"><a id="cart" href="FoodCart.php" class="nav-item nav-link"><img class="animate__animated animate__slideInLeft"src="carticon.PNG" style="margin-top:-10px; animation-delay: 0s; animation-duration: 2s"></a></li>
   </ul>
   </div>
   
   </nav>
   </div>
	
 <div id="HeaderCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interh5="1500">
  <ol class="carousel-indicators">
      <li data-target="#HeaderCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#HeaderCarousel" data-slide-to="1"></li>
      <li data-target="#HeaderCarousel" data-slide-to="2"></li>
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
   <p >Why to fear when Food Quest is here!<br><br><a href="Food Ordering System.html"><span id="Order-Button">Order it</span ></a>
       <span>Enjoy it!</span></p>
   </div>
	</div>
    <div class="carousel-item" >
      <img src="header-bg2.jpg">
	  <div class="caption">
	  <h1>Feeling Hungry? </h1>
   <p>Why to fear when Food Quest is here!<br><br><a href="Food Ordering System.html"><span id="Order-Button">Order it</span ></a>
       <span>Enjoy it!</span></p>
   </div>
   </div>
    <div class="carousel-item">
       <img src="header-bg3.jpg">
	   <div class="caption">
	   <h1>Feeling Hungry? </h1>
        <p>Why to fear when Food Quest is here!<br><br><a href="Food Ordering System.html"><span id="Order-Button">Order it</span ></a>
             <span>Enjoy it!</span></p>
   </div>
   </div>
  </div>
   <a class="carousel-control-prev text-light" href="#HeaderCarousel" role="button" data-slide="prev">
    <span class="fa fa-chevron-left" ></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next text-light" href="#HeaderCarousel" role="button" data-slide="next">
    <span class="fa fa-chevron-right" ></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   </header>
   
   
<div id="login" class="modal">
 
  <form class="modal-content animate" action="login.php" method="POST">
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

   <section class="Home-Page">
      <div class="container" style="padding:60px;">
	      <div class="row">
		      <div class="col-lg-12">
			      <div class="how-it-works">
				     <div class="row justify-content-center">
					     <div class="col-lg-6">
						    <div class="section-title text-center">
                                    <img src="shape.png">
                                    <h3 class="animate__animated animate__bounce" style="animation-delay:1s;">How it work</h3>
                                    <p>Enjoy Our Service in 3 simple easy steps</p>
                            </div>
					     </div>
				     </div>
					 <div class="row justify-content-center">
					     <div class="col-lg-4 col-md-8">
						    <div class="Worinkg-item">
                                    <a href="#">
                                    <h4><img src="icon-1.PNG"> Serach for restaurant</h4></a>
                                    <p>You can search for your favourite food from your favourite resturant</p>
                            </div>
					     </div>
						 <div class="col-lg-4 col-md-8">
						    <div class="Worinkg-item">
                                    <a href="Food Ordering System.html">
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
<section>
	<div class="container" id="Questions">
		<h1>Frequently Asked Questions</h1>
		<h2>Does Food Quest offers 24 hours service?</h2>
		<p>Unfortunately, we offer our service with a time limit, which can be seen in the Footer Section</p>
		<h2>What are Payment Methods?</h2>
		<p>It can be Cash on Delivery as well as Online Payment.</p>
		<h2>What are Payment Methods?</h2>
		<p>It can be according to your prefernces. It can be Cash on Delivery as well as Online Payment.</p>
		<h2>What are the Delivery Charges?</h2>
		<p>Delivery fee depends on the restaurant you are ordering from. You can always check the delivery fee while forming your order.</p>
	</div>
</section>

<section class="Feedback" id="feedback" >
	<div class="row">
		<div class="col-lg-6 col-md-3 col-sm-2"></div>
		<div class="col-lg-6 col-md-9 col-sm-10">
			<div class="Feedback-Box">
			<?php 
							     if(!isset($_SESSION['id'])){
									echo  "<p style='color:red; text-align:center;'> You need to login into your account first.</p><br><br>";
								 }
							
							?>
				<h2>Want to Share your experience with Food Quest?</h2>
				<p>Your feedback always help us to improve more.</p>
				<br>
					<br>
					<form enctype="multipart/form-data" action="addReview.php" method="POST">
					<label for="Title" style="text-align:left; color:#5B4F38;">Title</label><br>
						<input type="text" style="background-color:#F7EFE0; height:50px;" placeholder="Express your experince in 2-3 words" name="title" required><br>
						<label for="review" style="text-align:left; color:#5B4F38;">Extensive Details</label>
						<input type="text" style="background-color:#F7EFE0; height:130px;" placeholder="Share your thoughts" name="review" required>
						
						<div align="center">
						   <i class="fa fa-star fa-2x" style="width:80px;" data-index="0" ></i>
						   <i class="fa fa-star fa-2x" style="width:80px;" data-index="1"></i>
						   <i class="fa fa-star fa-2x" style="width:80px;" data-index="2"></i>
						   <i class="fa fa-star fa-2x" style="width:80px;" data-index="3"></i>
						   <i class="fa fa-star fa-2x" style="width:80px;" data-index="4"></i>
						  
						</div>
						<input type="text" style="background-color:transparent; height:20px; text-align:center; color:#D8B734; font-size:20px;"  name="rating" id="rating">
							<br/>
							<br/>
							
							<button id="#RegisterButton" type="submit" style="color:white; background-color: #CCBC69; width: 50%;">Submit</button>
							</form>
							
						</div>	
					</div>
					<div>
					</section>
			<footer class="Footer">
  <div class="container" style="margin-top: 170px;">
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
	
	
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
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
  });

  ratedIndex=-1;
  resetStarColors();

            $('.fa-star').on('click', function () {
               ratedIndex = parseInt($(this).data('index'));
			   document.getElementById("rating").value=ratedIndex+1;
            });

            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function () {
                resetStarColors();
                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });
        });

        

        function setStars(max) {
            for (var i=0; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', '#D8B734');
        }

        function resetStarColors() {
            $('.fa-star').css('color', '#CFC9A6');
        }

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
  if ($(window).scrollTop() > 200) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '200');
});

</script>
</body>
</html>


