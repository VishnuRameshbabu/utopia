 <?php
 error_reporting(1);  
session_start();
extract($_REQUEST);
if($_REQUEST['log']=='out')
{
session_destroy();
header("location:utopiamain.html");
}
?> 
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="utopia_style.css" >
</head>
<body><div class="navbar">
<div class="dropdown">
    <button class="dropbtn"> &#9776; 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h4>Categories</h4>
      </div><div class="row">
        <div class="column">
          <a href="utopia_prod.php?id=1"><h4>Men</h4></a>
          <a href="utopia_prod.php?id=8">Topwear</a>
          <a href="utopia_prod.php?id=9">Bottomwear</a>
          <a href="utopia_prod.php?id=10">Accessories</a>
        </div>
        <div class="column">
          <a href="utopia_prod.php?id=2"><h4>Women</h4></a>
          <a href="utopia_prod.php?id=14">Topwear</a>
          <a href="utopia_prod.php?id=15">Bottomwear</a>
          <a href="utopia_prod.php?id=16">Ethinic</a>
        </div>
        <div class="column">
          <a href="utopia_prod.php?id=3"><h4>Electronics</h4></a>
          <a href="utopia_prod.php?id=6">Mobile</a>
          <a href="utopia_prod.php?id=7">Laptops</a>
          <a href="utopia_prod.php?id=11">Home appliances</a>
        </div>
        <div class="column">
          <a href="utopia_prod.php?id=4"><h4>Home Decor</h4></a>
          <a href="utopia_prod.php?id=17">Chandeliers</a>
          <a href="utopia_prod.php?id=12">furniture</a>
          <a href="utopia_prod.php?id=13">Curtains</a> 
        </div>
      </div>
    </div>
  </div>
  <p class="logo"><a href="utopiamain.html">UTOPIA</a></p>
  <?php
if($_SESSION['name']==True){
    echo '<a href="#">'.$_SESSION['name'].'</font></a>'; } 
else{
 echo'<p class="icon"><a href="signup_ecommerce.php">&#128102;</a>';
}
    ?>
<!--   <a href="#cart">Cart</a> -->
<?php
if($_SESSION['name']==True){
    echo '<a href="?log=out">Logout</font></a>'; } ?>
  <a href="searchfunc_utopia.php">&#128269;</a>
</div>
<!-- <img src="stuff/men.jpg" style="width:100%"><hr> -->
<p style="font-family:Calibri;font-size:30px;color:red;font-weight:bold;margin-left:2%">
OUR PRODUCTS</p>

<?php
$id=$_GET['id'];
$dbc=mysqli_connect('sql12.freemysqlhosting.net','sql12295317','k9Ng5LuYRi','sql12295317')
or die("some error");
if ($id>=1 and $id<=17) {if ($id<=4) {
$query="SELECT * from product where category_id=$id";
$result=mysqli_query($dbc,$query);
while($row=mysqli_fetch_array($result)){
  $id_prod=$row['product_id'];
echo '<div class="products"> <a href="details.php?id='.$id_prod.'"><img src="stuff/'.$row['image'] .'" style="width:100% ;height:350px;"></a> <div 
class="container"><p class="bname">'.$row['product_name'].'</p><p class="price">'.$row['price'].'</p></div> </div>';
}
}
 
 else{ # code...
$query="SELECT * from product where subcategory_id=$id";
$result=mysqli_query($dbc,$query);
while($row=mysqli_fetch_array($result)){
  $id_prod=$row['product_id'];
echo '<div class="products"> <a href="details.php?id='.$id_prod.'"><img src="stuff/'.$row['image'] .'" style="width:100% ;height:350px;"></a> <div 
class="container"><p class="bname">'.$row['product_name'].'</p><p class="price">'.$row['price'].'</p></div> </div>';}}}

else if ($id>=100 and $id<=144){
  $query="SELECT * from product where product_id=$id";
  $result=mysqli_query($dbc,$query);
while($row=mysqli_fetch_array($result)){
  $id_prod=$row['product_id'];
echo '<div class="products"> <a href="details.php?id='.$id_prod.'"><img src="stuff/'.$row['image'] .'" style="width:100% ;height:350px;"></a> <div 
class="container"><p class="bname">'.$row['product_name'].'</p><p class="price">'.$row['price'].'</p></div> </div>';}}
else{
  echo "<p>Sorry, we couldn't find your product</p>";
}
?>
</body>
</html>