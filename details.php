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
<link rel="stylesheet" href="details.css">
<link rel="stylesheet" href="utopia_style.css">
</head>
<body>
<div class="navbar">
<div class="dropdown">
    <button class="dropbtn"><p class="drop"> &#9776; </p>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h4>Categories</h4>
      </div>      
      <div class="row">
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
          <a href="utopia_prod.php?id=12">Furniture</a>
          <a href="utopia_prod.php?id=13">Curtains</a> 
        </div>
      </div>
    </div>
  </div>
  <p class="logo"><a href="utopiamain.html">UTOPIA</a></p>
  <!-- sign in podanum -->
    <?php
if($_SESSION['name']==True){
    echo '<a href="signup_e-commerce">'.$_SESSION['name'].'</font></a>'; } ?>
<!--   <a href="#cart">Cart</a> -->
<?php
if($_SESSION['name']==True){
    echo '<a href="?log=out">Logout</font></a>'; } ?>
  <a href="searchfunc_utopia.php">&#128269;</a>
</div>
<?php

$id=$_GET['id'];
$dbc=mysqli_connect('sql12.freemysqlhosting.net','sql12295317','k9Ng5LuYRi','sql12295317')
or die("some error");
$query="SELECT * from product where product_id=$id";
$result=mysqli_query($dbc,$query);
$row=mysqli_fetch_array($result);
$price=$row['price'];
echo '<div class="picbg">';
echo'<a target="_blank" href="stuff/'.$row['image'].'">';
echo'<img src="stuff/'.$row['image'].'" class="descripimg" class="hover">';
echo '</a>';
$rand=mt_rand(200,500);
$fakeprice=$price+$rand;
echo '</div>';
echo'<div class="desbg">';
echo'<p class="brandname">'.$row['product_name'].'</p>';
echo'<p class="category">'.$row['category_name'].'</p>';
echo'<hr>';
echo'<p class="cost">₹'.$row['price'].'</p>';
echo'<p class="fake"><strike>₹'.$fakeprice.'</strike></p>';
echo'<p class="tax">*Additional Taxes Apply</p>';
echo'<p class="productdetails"> Product Details</p>';
echo'<div class="bg"><p class="details">'.$row['color'].'<br>'.$row['size'].'<br>'.$row['specifications'].'</p>';
echo'</div>';
echo'</div>';
?>
</html>





