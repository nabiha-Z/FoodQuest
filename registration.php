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
$image="icon-4.png";

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
	
$sql="INSERT INTO registertable(FirstName, LastName, Email, Password, Contact, City, ResturantName, ResturantAddress, ProfileImage) VALUES('$firstname', '$lastname', '$email', '$password', '$contact', '$city', '$restName','$restAddr', '$image')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>alert('Registered')</script>";
	?>
	<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System%20-%20FA18-BCS-081%20-%20FA18-BCS-114/RegisterForm.php">
	<?php
}else{
	echo "notsuccessfully";
}
	}
	
}

 ?>