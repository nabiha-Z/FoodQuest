<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
 
$username= $_REQUEST["username"];
$address= $_REQUEST["address"];
$email= $_REQUEST["email"];
$password= $_REQUEST["password"];
$contact= $_REQUEST["contact"];

echo $username ,$address, $email;


$conn=mysqli_connect("localhost","simsscho_nabiha","nabiha1234@","simsscho_SignUp");
if($conn){
	echo"connected successfully";
}
else{
	echo"failed";
}
$sql="INSERT INTO signuptable(Name, Email, Password, Contact, Address) VALUES('$username', '$email', '$password', '$contact', '$address')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "successfully";
}else{
	echo "notsuccessfully";
}
}
 ?>