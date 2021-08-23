<?php
   session_start();
   if(!isset($_SESSION['id'])){
	   echo "<script>alert('Login to your account First')</script>";
?>
			<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System/FoodQuestHomePage.php">
		
		<?php
   }
   $conn=mysqli_connect("localhost","simsscho_nabiha","nabiha1234@","simsscho_SignUp");
   $id=$_SESSION['id'];
   $result=mysqli_query($conn,"SELECT * FROM signuptable WHERE ID= '$id'");
	
	if(mysqli_num_rows($result) > 0){
       $row=mysqli_fetch_array($result);	
	   $image=$row['ProfileImage'];
	}
   
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Food Cart</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="FOS Styling.css">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
</head>


<body>
  
   <header id="food-cart-header">
   <div class="container-fluid" style="padding:0px;">
   <nav id="Fixed-NavBar" class="navbar navbar-expand-lg  fixed-top" style="background-color:rgba(162,154,84,0.7)">
   <a class="navbar-brand  navbar-expand-lg"  href="#"><img id="logo" src="Food-Quest-Logo.png"></a>
   <button id="collapse-menu"type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse8">
            <span class="navbar-toggler-icon"></span>
        </button>
   <div class="collapse navbar-collapse" id="navbarCollapse8">
   <ul id="list-inline" class="navbar-nav">
      <li class="navigation" id="nav-element"><a href="FoodQuestHomePage.php" class="nav-item nav-link ">Home</a></li>
	  <li class="navigation" id="nav-element"><a href="AboutUs.php" class="nav-item nav-link">About</a></li>
	  <li class="navigation" id="nav-element"><a href="FoodOrderingSystemMenu.php" class="nav-item nav-link">Menu</a></li>
	  <?php echo ' <li class="navigation" id="nav-element">
	  
	   <div class="dropdown">
			 <a class="dropbtn" href="#" id="userDropdown" role="button" data-toggle="dropdown"><span class="mr-2 d-none d-lg-inline text-gray-600 small" style="color:#F0E0C2">Welcome '.$_SESSION['name'].'!</span>
                <img class="img-profile rounded-circle" src="'.$image.'" width=50px;><i class="fa fa-angle-down"></i></a>
				<div class="dropdown-content">
                				<a target="_self" href="OrderHistory.php?">Order History</a>
                				<a  href="UpdateProfile.php?">Change Name</a>
								<a  href="UpdateProfile.php?">Change Picture</a>
								<a  href="UpdateProfile.php?">Change Password</a>
								<a  href="UpdateProfile.php?">Change Email</a>
								<a  href="UpdateProfile.php?">Change Contact</a>
								<a  href="UpdateProfile.php?">Change Address</a>
								<a href="logout.php">Logout</a>
 
</div>
							<div class="dropdown-menu">
							    
				     		</div>
						</div>
	  
	 '?>
	  
	  
	  
	  
	  <li class="navigation" id="nav-element"><a id="cart" href="# active" class="nav-item nav-link"><img class="animate__animated animate__slideInLeft"src="carticon.PNG" style="margin-top:-10px; animation-delay: 0s; animation-duration: 2s"></a></li>
     
   </ul>
   </div>
   
   </nav>
   </div>
   </header>
   
   <h1 id="title" >Food Cart</h1>
  
   
<section>
<div class="container-fluid px-lg-4">
<form action="checkout.php" method="POST">
	<div class="row">
		<div class="col-md-9 mt-4">
				<div class="table-responsive">
					<table id="table" class="table v-middle">
						<thead>
							<tr class="bg-light">
								<th class="border-top-0">No.</th>
								<th class="border-top-0">Item</th>
								<th class="border-top-0">   </th>
								<th class="border-top-0">Price</th>
								<th class="border-top-0">Description</th>
								<th class="border-top-0">Resturant</th>
								<th class="border-top-0">Quantity</th>
								<th class="border-top-0"></th>
								<th class="border-top-0" style="text-align:center">Discard</th>
							</tr>
							</thead>
						
						<tbody>
						<?php
						$conn=mysqli_connect("localhost","root","","foodcart");
						$sql = "SELECT * FROM carttable";
						$selectresult = mysqli_query($conn, $sql);
						$userid=$_SESSION['id'];			
						$counter=1;						
						if(mysqli_num_rows($selectresult) > 0){		
							while($row = mysqli_fetch_assoc($selectresult)) {
								$user=$row["UserID"];
								if($user == $userid){
								$ID=$row["ID"];
								$itemID=$row["ItemID"];
								$productname=$row["ItemName"];
								$description=$row["Size"];
								$quantity=$row["Quantity"];
								$price=$row["Price"];
								$image=$row["ItemImage"];
								$resturant=$row["Resturant"];
								
						echo '<tr>
							<td>
										<div class="d-flex align-items-center">
											<div class="m-r-10">
												<a class="btn btn-circle btn-orange text-white" ><span id="ID">'.$counter.'</span></a>
											</div>
											</td>
											<td>
											<div class="">
												<h6 class="m-b-0 font-16">'.$productname.'</h6>
											</div>
										</div>
									</td>
									<td>
										<img class="cart-products-image" src="'.$image.'"></td>
										
										<td>'.$price.'</td>

										<td>'.$description.'</td>
										<td>'.$resturant.'</td>
										<td>'.$quantity.'</td>
										<td><span style="float:right;"><a href="increaseQuantity.php?id='.$ID.'& quantity= '.$quantity.'& inc=1 & dec=0"><i class="fa fa-plus" style="color:red; font-size:10px;"></i></a><a href="increaseQuantity.php?id='.$ID.'& quantity= '.$quantity.'& inc=0 & dec=1"><i class="fa fa-minus" style="color:green; font-size:10px; padding-left:5px;"></i></a></span>  </td>
										
										<td>
										<a class="minus-icon" href="DeleteCartItem.php?id='.$ID.'" onclick="return checkdelete()"><i class="fa fa-minus"> </i> <span style="font-size:12px; color:#404040;">Remove<span> </a>
										</td>
									</tr>';
									$counter+=1;
							    }
							}
						}
									?>
									</tbody>
								</table>
							</div>
					</div>
					<div class="col-md-3">
                        <div class="container" id="Billing">
                            <div class="Billing-header">
                                <h1>Cart Total</h1>
								</div>
								<div class="Billing-content">
                                <p>Total<span id="total">Rs.0</span></p>
                                <p>Shippping<span id="shipping">0</span></p>
                                <p class="ship-cost">Discount<span>Rs.0</span></p>
                                <h2>Grand Total<span id="grandTotal">0</span></h2>
								
							</div>
                            </div>
                            
							
							<div class="checkout-btn" style="background-color:rgba(51, 34, 10 ,0.9);">
							<?php echo'<a style="color:#ECD191; font-size:20px; text-decoration:none" href="checkout.php" onclick="return confirmOrder()">Check Out</a>' ?>
							</div>
							</div>
				</div>
				</form>
			</div>
   </section>          



<script>
function checkdelete(){
	
	return confirm("Are you sure you want to Delete the Record?");
}

function confirmOrder(){
	
	return confirm("Are you sure you want to Confirm the Order?");
}
	
	var table=document.getElementById("table"), sum=0, quantity=1, price, count=0;
	
	for(var i=1; i < table.rows.length; i++){
		quantity =(table.rows[i].cells[6].innerHTML);
		price =parseInt(table.rows[i].cells[3].innerHTML);
		sum = sum + (price * quantity);
	}
	
	document.getElementById("total").innerHTML="Rs. "+sum;
	
	var d=50;
	document.getElementById("shipping").innerHTML=d;
	document.getElementById("grandTotal").innerHTML=d+sum;

</script>
</body>
</html>
                            