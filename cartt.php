  <?php
$id=$_GET["x`"];
$picture=$_GET["picture"];
$name=$_GET["name"];
$price=$_GET["price"];
echo $id,$name,$price;
echo'
<script>
 var temp=localStorage.getItem("cartproduct");
 //alert(temp);
if(temp==null){
    //alert("NULL");
    var productslist=["'.$picture.'_'.$name.'_'.$price.'"];
    localStorage.cartproduct=productslist;
}
else{
    var producttemp=[];
    //alert(localStorage.cartproduct);
    producttemp=localStorage.cartproduct.split(",");
    producttemp.push("'.$picture.'_'.$name.'_'.$price.'");
    // for(var i=0; i<producttemp.length;i++){
    // producttemp[i]= producttemp[i].split("_");
    // }
    //alert(producttemp[0]);
    localStorage.cartproduct=producttemp;
    //alert(localStorage.cartproduct[1]);
    window.location.replace("../project/cart.php");
}
</script>
';
 
 ?> 


 