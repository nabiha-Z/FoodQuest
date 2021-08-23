<?php
    
   session_start();
   if(!isset($_SESSION['id'])){
	    echo "<script>alert('Login to your account First')</script>";
	   header('Location: FoodQuestHomePage.php');
   }else{
   $id=$_SESSION['id'];
   $name=$_SESSION['name'];
   $address=$_SESSION['address'];
   date_default_timezone_set("Asia/Karachi");
   $orderNo=rand(50,1000);
   $date =date("d/m/Y");
   $time=date("h:i:sa"); 
   }
      
   
?>

<html>	
<head>
<link rel="stylesheet" href="FOS Styling.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<style>

h2, h5, h4, h6{
	font-family:'Lato', sans-serif;
	text-align:left;
	margin-left:70px;
	font-size:50px;
	margin-top:20px;
}
h5{
	font-size:20px;
	color:#B9B5AE;
}
h6{
	
	color: #D07951;
	font-size:18px;
	margin-top:-10px;
}
.Billing-header{
	background-color: #B63E3A;
	color:#EDE3AA;
	text-align:center;
	
}


#Billing{
	background-color:white;
	position:relative;
	height:400px;
}
h4{
  font-size:40px;	
}
.fa-close{
	color:#5E5E5E;
	font-size:30px;	
}
.fa-close :hover{
	color:#B1B1B1;
	cursor:pointer;
}
.Billing-content p {
  margin-left:-40px;
}
</style>
<body>


<section>
<div class="container-fluid px-lg-4" style="background-color:#F5F4F3; ">
	<div class="row">
		<div class="col-md-9 mt-4">
			
<a href="FoodCart.php"><i class="fa fa-close"></i></a>
<h2>Thank You <?php echo $name; ?> <i class='far fa-grin' style='font-size:48px;color:#CEC256;'></i></h2>
<h5>Your order has been confirmed</h5>
<h5>It will be delievered to you soon!</h5>
     <?php  $mydate=getdate(date("U"));
     echo '<h6> Order Date:  <br>';
	 echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]</h6><br>";
	 echo '<h6> Order Time:  <br>';
     echo  $time;
	  

?>
<br>
									
						
					</div>
					<div class="col-md-3" >
                        <div class="container" id="Billing" style="float:right; margin-top:-300px;">
                            <div class="Billing-header">
                                <h1>Bill issued to</h1>
								</div>
								<div class="Billing-content">
                                <p style="margin-left:-80px;">Name: <span><?php echo $name ?></span></p>
                                <p style="margin-left:-50px;">Address: <span><?php echo $address ?></span></p>
								<p style="margin-left:-85px;">Shipment<span id="shipping">100</span></p>
                                <p style="margin-left:-50px;">Total Bill<span id="bill">0</span></p>
                                <p>Order Number: <span> <?php echo $orderNo;?></span></p>
                                <p>Payment Method: <span>COD</span></p>
                                <p style="margin-left:-26px;">Date: <span> <?php echo $date; ?></span></p>
                                
                            
							</div>
                            </div>
                            
						
				</div>
				</form>
			</div>
   </section>
<section>
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-4">
		<h4>Order Details</h4>
			<div class="table-container">
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
								
							</tr>
							</thead>
						
						<tbody>
						<?php
						$conn=mysqli_connect("localhost","simsscho_nabiha","nabiha1234@","simsscho_foodcart");
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
												<p class="m-b-0 font-16">'.$productname.'</p>
											</div>
										</div>
									</td>
									<td>
										<img class="cart-products-image" src="'.$image.'"></td>
										
										<td>'.$price.'</td>

										<td>'.$description.'</td>
										<td>'.$resturant.'</td>
										<td>'.$quantity.'</td>
										
									</tr>';
									$counter+=1;
									$conn2=mysqli_connect("localhost","simsscho_nabiha","nabiha1234@","simsscho_checkout");
									
						            
											$query ="INSERT INTO confirmorders(ItemID, ProductName, Image, Description, Price, Quantity, UserID, ResturantName,OrderNo,Completed,CheckoutTime, CheckoutDate, Rated) VALUES('$itemID', '$productname', '$image', '$description' , '$price', '$quantity','$userid','$resturant','$orderNo', 'No', '$time', '$date', 'No')";
											 $r=mysqli_query($conn2,$query);
											 
										 
										 if($r){
											$query2="DELETE FROM carttable WHERE UserID = '$userid'";
											$data2=mysqli_query($conn,$query2);
											
										 }

											 
									
							    }
								
							}
						}
									?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
			   </div>
			 </section>
					
<script>
var table=document.getElementById("table"), sum=0, quantity=1, price, count=0;
	
	for(var i=1; i < table.rows.length; i++){
		
		quantity =(table.rows[i].cells[6].innerHTML);
		price =parseInt(table.rows[i].cells[3].innerHTML);
		sum = sum + (price * quantity);
		(table.rows[i].cells[6].innerHTML)="x "+quantity;
		
	}
	
	
	var d=parseInt(document.getElementById("shipping").textContent);
	var bill=d+sum;
	document.getElementById("bill").innerHTML="Rs. "+bill; 
</script>

</body>
</html>

