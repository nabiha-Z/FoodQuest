<br>
<?php 
$conn=mysqli_connect("localhost","simsscho_nabiha","nabiha1234@","simsscho_signup");
if($conn){
	echo"connected successfully";
}
else{
	echo"failed";
}

if(isset($_POST["username"]) && isset($_POST["address"]) && isset($_POST["email"]) && isset($_POST["password"])&& isset($_POST["contact"])){
 
$username= $_POST["username"];
$address= $_POST["address"];
$email= $_POST["email"];
$password= $_POST["password"];
$contact= $_POST["contact"];

if (empty($username)) {
	echo "Enter username <br>";
}
else{
	echo "$username <br>" ;
}

if (empty($address)) {
	echo "Enter address number <br>" ;
}
else{
	echo "$address <br>";
}

if (empty($country)) {
	echo "country <br>";
}else{
	echo "$country <br>";
}

if (empty($email)) {
	echo "Enter Email <br>";
}else{
	echo "$email <br>";
}

if (empty($password)) {
	echo "Enter Password <br>";
}else{
	echo "$password <br>";
}

if (empty($contact)) {
	echo "contact <br>";
}else{
	echo "$contact <br>";
}
}
$sql="INSERT INTO SignupTable(Name, Email, Password, Contact, Address) VALUES('$username', '$email', '$password', '$contact', '$address')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "successfully <br>";
}else{
	echo "notsuccessfully";
}
 ?>