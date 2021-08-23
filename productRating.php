<?php 
  
  
  $ID=$_GET['id'];
  $itemID=$_GET['itemid'];
  

?>

<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="FOS Styling.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
</head>
<style>
 .modal{
	 display:block;
 }
 
 .cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: rgba(255, 92, 63);
  margin-left:42%;
  opacity:60%;
}
 
</style>
<body>

<div id="login" class="modal">
 
  <form class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container" style="text-align:center">
	<h2 style="font-size:30px;">Let us know if this food was upto your taste.</h2>
				<h6 style="font-size:15px; color:#B0A576; margin-top:-20px;">Your feedback always help us to improve more.</h6>
				<br>
					<br>
           <div align="center">
						   <i class="fa fa-star fa-2x" style="width:80px;" data-index="0" ></i>
						   <i class="fa fa-star fa-2x" style="width:80px;" data-index="1"></i>
						   <i class="fa fa-star fa-2x" style="width:80px;" data-index="2"></i>
						   <i class="fa fa-star fa-2x" style="width:80px;" data-index="3"></i>
						   <i class="fa fa-star fa-2x" style="width:80px;" data-index="4"></i>
						  
						</div>
		<input type="text" style="background-color:transparent; border-bottom:none; height:20px; text-align:center; color:#D8B734; font-size:20px;" placeholder="" name="rating" id="rating">
	  
    </div>

    <div class="container" id="footer">
      <button type="submit" class="cancelbtn">Submit</button>
    </div>
  </form>
</div>

<script>
$(document).ready(function(){
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
                $('.fa-star:eq('+i+')').css('color', '#D8B734 ');
        }

        function resetStarColors() {
            $('.fa-star').css('color', '#CFC9A6');
        }

</script>

</body>
</html>

<?php  

   if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $rating=$_REQUEST['rating'];
   echo $rating;
   $conn=mysqli_connect("localhost","root","","fooditems");
   $dup=mysqli_query($conn,"SELECT * FROM items WHERE ID='$itemID'");
   if(mysqli_num_rows($dup) > 0){	  
							while($row = mysqli_fetch_assoc($dup)) {
								$itemid=$row["ID"];
								if($itemid == $itemID){
									$averageRating=$row["AverageRating"];
								}
							}
		   }
		   if($averageRating == 0){
			   $averageRating = $rating;
		   }else{
		   $averageRating = ($averageRating + $rating) / 2;
		   }
		   echo $averageRating . "<br>";
      $sql=mysqli_query ($conn,"UPDATE items SET AverageRating = '$averageRating' WHERE ID = '$itemID'");

	  $conn2=mysqli_connect("localhost","root","","checkout");
	  $sql2=mysqli_query($conn2, "UPDATE confirmorders SET Rated = 'Yes' WHERE ItemID = '$itemID'");
     echo ' <script>alert("Thank for your response!")</script>';
    ?>
   <meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Food%20Ordeing%20System%20-%20FA18-BCS-081%20-%20FA18-BCS-114/OrderHistory.php?">	   
<?php 
   }
?>