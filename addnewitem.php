  <?php

$conn=mysqli_connect("localhost","root","","fooditems");
if($conn){
	echo"connected successfully";
}
else{
	echo"failed";
}

$foodname="NULL";  $foodimage="NULL"; $price="NULL"; $description="NULL";
echo"isssett";
$foodname= $_POST["itemname"];
$foodimage= $_FILE["img"]["name"];
$price= $_POST["price"];
$description= $_POST["description"];
echo "$description";

$sql="INSERT INTO items(Name, Description, Price, Image) VALUES('$foodname','$description' , '$price' ,'$foodimage')";

$r=mysqli_query($conn,$sql);
if($r){
	echo "Added Successfully";
}
else{
	echo "Not added";
}
 ?>