<?php 
  session_start();
  $id=$_SESSION['id'];
  $conn=mysqli_connect("localhost","root","","checkout");
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Food Quest Menu</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="FOS Styling.css">
<link rel="stylesheet" href="Dashboard Style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
.fa-close{
	color:#5E5E5E;
	font-size:30px;	
}
.fa-close :hover{
	color:#B1B1B1;
	cursor:pointer;
}
h2{
	text-align:center;
	font-size:50px;
}
.table-responsive{
	margin-left:40px;
}
.Total-Bill{
	background-color:#F3EEDB;
	text-align:right;
	
}

td p{
	color:#807653;
}
</style>
<body>
<a href="FoodCart.php"><i class="fa fa-close"></i></a>
<h2>Orders History</h2>
<div class="container-fluid px-lg-4">
         <div class="row">
         <div class="col-md-11 mt-4">
		    <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
									
                                        <tr class="bg-light">
										<th class="border-top-0">Rating</th>
										
										    <th class="border-top-0">No.</th>
                                            <th class="border-top-0">Products</th>
                                            <th class="border-top-0">Image</th>
											<th class="border-top-0">Description</th>
                                            <th class="border-top-0">Price</th>
                                            <th class="border-top-0">Quantity</th>
                                            <th class="border-top-0">OrderNo.</th>
                                            <th class="border-top-0">Resturant</th>
                                            <th class="border-top-0">Date</th>
                                            <th class="border-top-0">Time</th>
										
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
						$sql = "SELECT * FROM confirmorders WHERE UserID = '$id'";
						$selectresult = mysqli_query($conn, $sql);
						if(mysqli_num_rows($selectresult) > 0){
							$counter=1;
							$total=0;
							while($row = mysqli_fetch_assoc($selectresult)) {

								$ID=$row["ID"];
								$itemID=$row["ItemID"];
								$productname=$row["ProductName"];
								$description=$row["Description"];
								$quantity=$row["Quantity"];
								$image=$row["Image"];
								$price=$row["Price"];
								$order=$row["OrderNo"];
								$res=$row["ResturantName"];
								$time=$row["CheckoutTime"];
								$rated=$row["Rated"];
								if($counter==1){
									$tt=$time;
								}
								$date=$row["CheckoutDate"];
								if($time == $tt){
									$mul=$price*$quantity;
									$total = $total + $mul;
									
								}
								 if($time != $tt){
									 $total+=100;
	                                    echo'
                                        </tr>
										<tr class="Total-Bill">
										<td colspan="11" >
										
										   <p style="font-size:20px;"> Total: '.$total.'</p>
										
										   </td>
											   <tr>';}
									
					
                                        echo '<tr>';
									   
												 if($rated == "No"){
													  echo'<td><a class="ratingicon" href="productRating.php?id='.$ID.'& itemid='.$itemID.'"><i class="fa fa-star-o"></i> <span style="font-size:12px; color:#6A5F33;">Rate us<span> </a></td>';
												 }else{
													 echo '<td>   </td>';
												 }
											
										   
										echo '
										<td>
										<div class="m-r-10" ><a class="btn btn-circle btn-info text-white" style="font-size:15px;">'.$counter.'</a></div>
										</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                   
                                                        <h4 class="m-b-0 font-16">'.$productname.'</h4>
                                                   
                                                </div>
                                            </td>
                                            <td><img class="top-products-image" src="'.$image.'"></td>
                                            <td><h4 class="m-b-0 font-16">'.$description.'</h4></td>

                                            
                                               <td> <h5 class="m-b-0">'.$price.'</h5></td>
                                               <td> <h5 class="m-b-0">x'.$quantity.'</h5></td>
                                               <td> <h5 class="m-b-0">'.$order.'</h5></td>
                                               <td> <h5 class="m-b-0">'.$res.'</h5></td>
                                               <td> <h5 class="m-b-0">'.$date.'</h5></td>
                                               <td> <h5 class="m-b-0">'.$time.'</h5></td>
                                               
									</tr>';
											   
										if($time != $tt){
											
										   $total=0;
										   $mul=$price*$quantity;
									       $total = $total + $mul;
										}
										$counter+=1;
										$tt=$time;
								
							}
							 $total+=100;
							echo'
                                        
										<tr class="Total-Bill">
										<td colspan="11">
									
										   <p style="font-size:20px;"> Total: '.$total.'</p>
										  
										   </td>
											   <tr>';
							
						}
										?>
										</tbody>
                                </table>
                            </div>
		 
		   </div>
		   </div>
		   </div>

</body>