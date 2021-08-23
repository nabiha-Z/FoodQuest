<?php
   session_start();
   if(!isset($_SESSION['id'])){
	   echo "<script>alert('Login to your account First')</script>";
	   header('Location: Register.php#RegisterForm');
	   
   }
   $conn=mysqli_connect("localhost","root","","register");
   $id=$_SESSION['id'];   
   $restuarnt=$_SESSION['ResName']; 
   $firstname = $_SESSION['firstname'];
   $lastname = $_SESSION['lastname'];
   $result=mysqli_query($conn,"SELECT * FROM registertable WHERE ID= '$id'");
	
	if(mysqli_num_rows($result) > 0){
       $row=mysqli_fetch_array($result);	
	   $image=$row['ProfileImage'];
	}
	$conn3=mysqli_connect("localhost","root","","checkout");
	$sql = "SELECT * FROM confirmorders WHERE Completed = 'No' AND ResturantName = '$restuarnt'";		
	$selectresult = mysqli_query($conn3, $sql);
	$counter=0;
	if(mysqli_num_rows($selectresult) > 0){	
	while($row = mysqli_fetch_assoc($selectresult)) {
		
	$counter+=1;
	}
	}
	$pendingorders=$counter;
	
	$sql = "SELECT * FROM confirmorders WHERE Completed = 'Yes' AND ResturantName = '$restuarnt'";		
	$selectresult = mysqli_query($conn3, $sql);
	$totalorders=0;
    $sum=0;
	if(mysqli_num_rows($selectresult) > 0){
   
	   while($row = mysqli_fetch_assoc($selectresult)) {
			$quantity=$row["Quantity"];
			$price=$row["Price"];
			$totalorders++;
			$sum = $sum + ($quantity * $price);
	   }
	}
   
  
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard Style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	 <!-- jQuery for showing notifications -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  

    <title>Admin Dashboard</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  </head>
  <body>
     <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
       <div class="sidebar-content" style="padding: 0px;">
		    <?php echo'<img src="'.$image.	'" class="admin-image"> '; ?>
				<p class="image-caption">Admin</p>
				 <ul class="navbar-nav align-self-stretch">
	 
	      <li> 
		    <a class="nav-link text-left active"  role="button"  onclick="openTab(event,'Dashboard')" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-desktop"></i>  Dashboard 
           </a>
		  </li>

		   <li> 
		   <a class="dropdown-btn"style="color:#D53B5E;" ><i class="fa fa-edit" ></i>Orders  <i class="fa fa-caret-down"></i> </button>
		    <div class="dropdown-container">
			<div class="submenu-box"> 
			      <ul class="list-unstyled m-0">
				       <li><a class="nav-link text-left" onclick="openTab(event,'PendingOrders')" role="button">Pending</a></li>
					   <li><a class="nav-link text-left" onclick="openTab(event,'CompletedOrders')" role="button">Completed</a></li>
					   </ul>
					   </div>
  </div>



		  
		 </li>
		 <li> 
		  <a class="nav-link text-left" onclick="openTab(event,'Products')" role="button" >
       <i class="fa fa-product-hunt"></i> Products
         </a>
		  </li>
		<li> 
		  <a class="nav-link text-left"  role="button" >
       <i class="fa fa-tag"></i>  Categories 
         </a>
		  </li>
		  
		    <li> 
		  <a class="nav-link text-left" href="RegisterForm.php"  role="button" >
       <i class="fa fa-sign-out"></i> Logout 
         </a>
		  </li>  
		  </ul>	
			</div>  
    </nav>
	
	
        <div id="page-content-wrapper">
			<div id="content">

       <div class="container-fluid p-0 px-lg-0 px-md-0">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light my-navbar">

          <!-- Sidebar Toggle (Topbar) -->
            <div type="button"  id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
               <span></span>
			    <span></span>
				 <span></span>
            </div>
			
		  <h3 class="NavbarTitle"><span>ADM</span><span id="admin-title">IN</span>Dashboard</h3>	
          <ul class="navbar-nav ml-auto">
		  
		  <li class="nav-item">
			 <div >
			 <p style="margin-top:8px;"><?php echo $restuarnt ?></p>
						</div>
						
            </li>
		  
		  
		   <li class="nav-item dropdown">
							<a class="nav-icon dropdown" href="#" id="alertsDropdown" data-toggle="dropdown" aria-expanded="false">
								<div class="position-relative">
									<i class="fa fa-bell" ></i>
									<span class="indicator"><?php echo $pendingorders; ?></span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									<?php echo $pendingorders; ?> New Notifications
								</div>
								<div class="list-group">
									<a href="#PendingOrders" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
											   <i class='fa fa-hourglass-half' style='font-size:28px;color:#D8AD55'></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New Orders</div>
												<div class="text-muted small mt-1">You have <?php echo $pendingorders; ?> new orders waiting for you process it.</div>
											</div>
										</div>
									</a>
									
								</div>
								
							</div>
						</li>
		

            <li class="nav-item dropdown">
			 <div class="dropdown">
			 <a class="dropbtn" href="#" id="userDropdown" role="button" data-toggle="dropdown"><span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin Profile</span>
               <?php echo'<img src="'.$image.'"  class="img-profile rounded-circle"> '; ?></a>
				<div class="dropdown-content">
                				<a href="adminprofileupdate.php">Change Picture</a>
								<a href="adminprofileupdate.php">Change Password</a>
								<a href="adminprofileupdate.php">Change email</a>
								<a href="adminprofileupdate.php">Change Contact</a>
							    <a href="adminprofileupdate.php">Change Resturant Name</a>
								<a href="adminprofileupdate.php">Change Resturant Address</a>
								<a href="logout.php">Logout</a>
								</div>
						</div>
						
            </li> 
			<li class="nav-item">
			 <div >
			 <hr style="border:10px solid white;">
						</div>
						
            </li>
			

          </ul>

        </nav>

        <div class="tabcontent" id="Dashboard">
		<div class="tab-pane fade show active">
        <div class="container-fluid px-lg-4">
         <div class="row">
         <div class="col-md-12 mt-lg-4 mt-4">
          <!-- Page Heading -->
          <div class="header d-sm-flex align-items-center  mb-4">
		  <img  class="header-image" src="admin-header-image.jpg">
		  <div class="header-text">
           <h2>Welcome <?php echo $firstname ?></h2>
			<p>Have a look what new is waiting for you!</p>
          </div>
          </div>
		  </div>
                     <div class="col-md-12">
                             <div class="row">
							 <div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4" style=" color:#F6C754;">Earnings<span class="icon"><i  class="fa fa-dollar"></i></h5></span>
												<h1 class="display-5 mt-1 mb-3">Rs.<?php echo $sum ?></h1>
												<div class="mb-1">
													
													<span class="text-muted">Total uptill now</span>
												</div>
											</div>
										</div>
										
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4" style=" color:#D53B5E;">Orders<span class="icon"><i class="fa fa-edit"></i></span></h5>
												<h1 class="display-5 mt-1 mb-3"><?php echo $totalorders ?></h1>
												<div class="mb-1">
													
													<span class="text-muted">Total uptill now</span>
												</div>
											</div>
										</div>
										
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4" style=" color:#609BAB ">Sales<span class="icon"><i class="fa fa-line-chart"></i></span></h5> 
												<h1 class="display-5 mt-1 mb-3">3.124</h1>
												<div class="mb-1">
													
													<span class="text-muted">Total uptill now</span>
												</div>
											</div>
										</div>
										
									</div>
									
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4" style=" color:#3BA279;">Feedback<span class="icon"><i class="fa fa-thumbs-o-up"></i></span></h5>
												<h1 class="display-5 mt-1 mb-3">4.22</h1>
												<div class="mb-1">
													<span class="text-muted">Total uptill now</span>
												</div>
											</div>
										</div>
										
									</div>
									
									
									
								</div>
                    </div>

                   

        </div>

        </div>
        </div>
       
		<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>Food Quest Dashboard </strong></a> &copy
							</p>
						</div>
						<div class="col-6 text-right">
							<ul class="list-inline">
								<li class="footer-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
        </div>
		<hr style="border:40px solid #f7f7fc;">
		
		 <!-- Pending Orders Tab-->
		
		 <div class="tabcontent" id="PendingOrders">
         <div class="container-fluid px-lg-4">
         <div class="row">
         <div class="col-md-12 mt-4">
		                     <div class="card">
							 <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Pending Orders</h4>
                                        <h5 class="card-subtitle">Here are the orders waiting for you to process them</h5>
                                    </div>
                                   
                                </div>
                            </div>
							
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
										    <th class="border-top-0">No.</th>
                                            <th class="border-top-0">Products</th>
                                            <th class="border-top-0">Image</th>
											<th class="border-top-0">Description</th>
                                            <th class="border-top-0">Quantity</th>
                                            <th class="border-top-0">OrderNo.</th>
                                            <th class="border-top-0">ClientID.</th>
                                            <th class="border-top-0" colspan="2" style="text-align:center;">Operation</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
						
						$sql = "SELECT * FROM confirmorders WHERE Completed = 'No' AND ResturantName = '$restuarnt'";		
						$selectresult = mysqli_query($conn3, $sql);
						if(mysqli_num_rows($selectresult) > 0){
							$counter=1;
							
							while($row = mysqli_fetch_assoc($selectresult)) {
								$res=$row["ResturantName"];
								$ID=$row["ID"];
								$productname=$row["ProductName"];
								$description=$row["Description"];
								$quantity=$row["Quantity"];
								$image=$row["Image"];
								$order=$row["OrderNo"];
								$completed=$row['Completed'];
								$customerID=$row['UserID'];
					
                                        echo '<tr>
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

                                            
                                               <td> <h5 class="m-b-0">x '.$quantity.'</h5></td>
                                               <td> <h5 class="m-b-0">'.$order.'</h5></td>
                                               <td> <h5 class="m-b-0">'.$customerID.'</h5></td>
                                            
											<td>
											   <div class="processbtn" ><a  href="process.php?id='.$ID.'" >Process it</a></div>
											</td>
											
                                        </tr>';
										$counter+=1;
										$pendingorders=$counter;
								
							}
						}
										?>
										</tbody>
                                </table>
                            </div>
                        </div>
		 </div>
		 </div>
		 </div>
		 <footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>Food Quest Dashboard </strong></a> &copy
							</p>
						</div>
						<div class="col-6 text-right">
							<ul class="list-inline">
								<li class="footer-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		 </div>
		 
		  <!-- Completed Orders Tab-->
		
		 <div class="tabcontent" id="CompletedOrders">
         <div class="container-fluid px-lg-4">
         <div class="row">
         <div class="col-md-12 mt-4">
		                     <div class="card">
							 <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Orders Completed <i class= "fa fa-check" style="color:green;"></i></h4>
                                        <h5 class="card-subtitle">The orders which you managed to complete</h5>
                                    </div>
                                   
                                </div>
                            </div>
							
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
										    <th class="border-top-0">No.</th>
                                            <th class="border-top-0">Products</th>
                                            <th class="border-top-0">Image</th>
											<th class="border-top-0">Description</th>
                                            <th class="border-top-0">Price</th>
                                            <th class="border-top-0">Quantity</th>
                                            <th class="border-top-0">OrderNo.</th>
                                            <th class="border-top-0">ClientID.</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
						$conn=mysqli_connect("localhost","root","","checkout");
						$sql = "SELECT * FROM confirmorders WHERE Completed = 'Yes'";
						$selectresult = mysqli_query($conn, $sql);
						
						if(mysqli_num_rows($selectresult) > 0){
							$counter=1;
							
							while($row = mysqli_fetch_assoc($selectresult)) {
								$res=$row["ResturantName"];
								if($res == $restuarnt){
								$ID=$row["ID"];
								$productname=$row["ProductName"];
								$description=$row["Description"];
								$price=$row["Price"];
								$quantity=$row["Quantity"];
								$image=$row["Image"];
								$order=$row["OrderNo"];
								$completed=$row['Completed'];
								$customerID=$row['UserID'];
					
                                        echo '<tr>
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
                                               <td> <h5 class="m-b-0">x '.$quantity.'</h5></td>
                                               <td> <h5 class="m-b-0">'.$order.'</h5></td>
                                               <td> <h5 class="m-b-0">'.$customerID.'</h5></td>
                                            
											
											
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
		 </div>
		 </div>
		 </div>
		 <footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>Food Quest Dashboard </strong></a> &copy
							</p>
						</div>
						<div class="col-6 text-right">
							<ul class="list-inline">
								<li class="footer-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		 </div>
		 

		
		 <!-- Products Tab-->
         <div class="tabcontent" id="Products">
         <div class="container-fluid px-lg-4">
         <div class="row">
         <div class="col-md-12 mt-4">
		                     <div class="card">
							 <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Want to add new Item?</h4>
                                        <h5 class="card-subtitle">Add new item and share it wit your food lovers!</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <button class="additembtn" onclick="document.getElementById('addItem').style.display='block'" >Add Item</button>
                                    </div>
                                </div>
                            </div>
							
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
										    <th class="border-top-0">Code.</th>
                                            <th class="border-top-0">Products</th>
                                            <th class="border-top-0">Image</th>
											<th class="border-top-0">Description</th>
											<th class="border-top-0">Details</th>
											<th class="border-top-0">Genre</th>
                                            <th class="border-top-0">Price</th>
                                            <th class="border-top-0" colspan="2" style="text-align:center;">Operations</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
						$conn=mysqli_connect("localhost","root","","fooditems");
						$sql = "SELECT * FROM items";
						$selectresult = mysqli_query($conn, $sql);
						if(mysqli_num_rows($selectresult) > 0){
							$pendingorders=2;
							while($row = mysqli_fetch_assoc($selectresult)) {
								$user=$row["AdminID"];
								if($user == $id){
								$ID=$row["ID"];
								$productname=$row["Name"];
								$description=$row["Description"];
								$price=$row["Price"];
								$image=$row["Image"];
								$genre=$row["Genre"];
								$details=$row["Detail"];
								$rating=$row["AverageRating"];
								
                                        echo '<tr>
										<td>
										<div class="m-r-10" ><a class="btn btn-circle btn-info text-white" style="font-size:15px;">'.$ID.'</a></div>
										</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                   
                                                        <h4 class="m-b-0 font-16">'.$productname.'</h4>
                                                   
                                                </div>
                                            </td>
                                            <td><img class="top-products-image" src="'.$image.'"></td>
                                            <td><h4 class="m-b-0 font-16">'.$description.'</h4></td>
											<td><h4 class="m-b-0 font-16">'.$details.'</h4></td>
											<td><h4 class="m-b-0 font-16">'.$genre.'</h4></td>

                                            <td>
                                                <h5 class="m-b-0">Rs.'.$price.'</h5>
                                            </td>
											<td>
											   <div class="updatebtn" ><a  href="updateframe.php?id='.$ID.'&productname='.$productname.'&image='.$image.'&description='.$description.'&price='.$price.' & genre='.$genre.'& details='.$details.' & ratings= '.$rating.'" >Update</a></div>
											</td>
											<td>
											   <div class="deletebtn" ><a  href="delete.php?id='.$ID.'" onclick="return checkdelete()">Delete</a></div>
											</td>
                                        </tr>';
										
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
		 </div>
		 <footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>Food Quest Dashboard </strong></a> &copy
							</p>
						</div>
						<div class="col-6 text-right">
							<ul class="list-inline">
								<li class="footer-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		 </div>
      </div>
			
		<div id="addItem" class="modal">
  
  <form class="modal-content animate" enctype="multipart/form-data" action="" onsubmit="true" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('addItem').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="Food-Quest-Logo.PNG" class="img-logo">
    </div>

    <div class="container">
      <label for="username">Product Name</label><br>
      <input type="text"  id="name" placeholder="Product Name" name="itemname" required><br>

      <label for="Pass"><b>Description</b></label> <br>
      <input type="text" placeholder="Mention Size e.g: Small/Large/Litres/price per plate" name="description" required><br
	  
	  <label for="Detail"><b>Any extra details</b></label> <br>
      <input type="text" placeholder="Extensive Details (Optional)" name="detail"><br>
	  
	   <label for="genre"><b>Genre</b></label> <br>
      <input type="text" placeholder="Fast Food/ Cold drinks/ Desi Food/ Italian etc." name="genre" required><br>
	  
	  <label for="price"><b>Price</b></label> <br>
      <input type="text" placeholder="price" name="price" required><br>
	  
	  <label for="image"><b>Item Image</b></label> <br>
      <input type="file" id="img" name="img" accept="image/*">
	  
    </div>

    <div class="container" id="footer">
      <button type="button" onclick="document.getElementById('addItem').style.display='none'" class="cancelbtn">Cancel</button>
      <button type="submit"  onclick="alert('New Item Added')" class="new_Account">Add Item</button>
	  <script> </script>
    </div>
  </form>
</div>	

			
			</div>
		</div>

		
 <script>
 
$('#bar').click(function(){
	$(this).toggleClass('open');
	$('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});

var dropdown = document.getElementsByClassName("dropdown-btn");

var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}


function openTab(evt, TabName) {
  var i, tabcontent, tabLink;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tabLink = document.getElementsByClassName("nav-link");
  for (i = 0; i < tabLink.length; i++) {
    tabLink[i].className = tabLink[i].className.replace(" active", "");
  }
  document.getElementById(TabName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();



$(function() {
      $( 'ul.navbar-nav li a' ).on( 'click', function() {
            $( this ).parent().find( 'a.active' ).removeClass( 'active' );
            $( this ).addClass( 'active' );
      });
});

function checkdelete(){
	
	return confirm("Are you sure you want to Delete the Record?");
}




  </script>
  

  </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$conn=mysqli_connect("localhost","root","","fooditems");
if($conn){
	echo"connected successfully";
}
else{
	echo"failed";
}

$foodname= $_REQUEST["itemname"];
$foodimage= $_FILES["img"]["name"];
$price= $_REQUEST["price"];
$description= $_REQUEST["description"];
$detail= $_REQUEST["detail"];
$genre= $_REQUEST["genre"];
$ID=$_SESSION['id'];
$resturantname=$_SESSION['ResName'];

$dup=mysqli_query($conn,"SELECT * FROM items WHERE Name='$foodname' AND Description = '$description' AND Price= '$price'");
if(mysqli_num_rows($dup)>0){
	echo "Duplicate Row cannot be added";
}
else{
echo $foodname;
echo $foodimage; 
echo $price;
echo $description;
echo $detail;
echo $genre;
echo $ID;
echo $resturantname;
$sql="INSERT INTO items(Name, Description, Detail, Genre, Price, Image, AdminID, Resturant, AverageRating) VALUES('$foodname', '$description' , '$detail', '$genre' , '$price', '$foodimage', '$ID', '$resturantname', '0')";

$r=mysqli_query($conn,$sql);
if($r){
	echo "Added Successfully";
	?>
	<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System%20-%20FA18-BCS-081%20-%20FA18-BCS-114/AdminDashboard.php#Products">
<?php
}
else{
	echo "Not added";
	echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);
}

}
}
 ?>
  
  