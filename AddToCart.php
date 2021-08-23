
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
echo $description;
$sql="INSERT INTO items(Name, Description, Price,Image) VALUES('$foodname','$description' , '$price', '$foodimage')";

$r=mysqli_query($conn,$sql);
if($r){
	echo "Added Successfully";
}
else{
	echo "Not added";
	echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);
}
}
 ?>