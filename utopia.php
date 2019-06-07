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
      </div>   
      <div class="row">
        <div class="column">
          <a href="#"><h4>Men</h4></a>
          <a href="utopia_prod.php?id=8">Topwear</a>
          <a href="utopia_prod.php?id=9">Bottomwear</a>
          <a href="utopia_prod.php?id=10">Accessories</a>
        </div>
        <div class="column">
          <a href="#"><h4>Women</h4></a>
          <a href="utopia_prod.php?id=14">Topwear</a>
          <a href="utopia_prod.php?id=15">Bottomwear</a>
          <a href="utopia_prod.php?id=16">Ethinic</a>
        </div>
        <div class="column">
          <a href="#"><h4>Electronics</h4></a>
          <a href="utopia_prod.php?id=6">Mobile</a>
          <a href="utopia_prod.php?id=7">Laptops</a>
          <a href="utopia_prod.php?id=11">Home appliances</a>
        </div>
        <div class="column">
          <a href="#"><h4>Home Decor</h4></a>
          <a href="utopia_prod.php?id=17">Chandeliers</a>
          <a href="utopia_prod.php?id=12">Furniture</a>
          <a href="utopia_prod.php?id=13">Curtains</a> 
        </div>
      </div>
    </div>
  </div>
  <p class="logo"><a href="utopiamain.html">UTOPIA</a></p>
  <a href="signup_ecommerce.php">SignIn</a>
  <a href="#cart">Cart</a>
  <a href="searchfunc_utopia.html">Search</a>
</div>
<img src="stuff/men.jpg" style="width:100%"><hr>
<p style="font-family:Calibri;font-size:30px;color:red;font-weight:bold;margin-left:2%">
**OUR PRODUCTS</p>
<!-- <div class="products">
  <a href="#"><img src="photos/product.jpg" style="width:100%"></a>
  <div class="container">
    <p class="bname">GUCCI</p>
	<p class="price">$21.95</p>
  </div>
</div> -->
<?php
$dbc=mysqli_connect('localhost','Alien','123','ec')
or die("some error");
$query="SELECT * from product where category_id=3";
$result=mysqli_query($dbc,$query);
while($row=mysqli_fetch_array($result)){
echo '<div class="products"> <a href="#"><img src="stuff/'.$row['image'] .'" style="width:100% ;height:350px;"></a> <div 
class="container"><p class="bname">'.$row['product_name'].'</p><p class="price">'.$row['price'].'</p></div> </div>';}
//?>
</body>
</html>
<!-- <div class="products">
  <a href="#"><img src="photos/product.jpg" style="width:100%"></a>
  <div class="container"> 
    <p class="bname">GUCCI</p>
	<p class="price">$21.95</p>
  </div>
</div>

<div class="products">
  <a href="#"><img src="photos/product.jpg" style="width:100%"></a>
  <div class="container">
    <p class="bname">GUCCI</p>
	<p class="price">$21.95</p>
  </div>
</div>

<div class="products">
  <a href="#"><img src="photos/product.jpg" style="width:100%"></a>
  <div class="container">
    <p class="bname">GUCCI</p>
	<p class="price">$21.95</p>
  </div>
</div>

<div class="products">
  <a href="#"><img src="photos/product.jpg" style="width:100%"></a>
  <div class="container">
    <p class="bname">GUCCI</p>
	<p class="price">$21.95</p>
  </div>
</div>

<div class="products">
 <a href="#"> <img src="photos/product.jpg" style="width:100%"></a>
  <div class="container">
    <p class="bname">GUCCI</p>
	<p class="price">$21.95</p>
  </div>
</div>

<div class="products">
  <a href="#"><img src="photos/product.jpg" style="width:100%"></a>
  <div class="container">
    <p class="bname">GUCCI</p>
	<p class="price">$21.95</p>
  </div>
</div>

<div class="products">
  <a href="#"><img src="photos/product.jpg" style="width:100%"></a>
  <div class="container">
    <p class="bname">GUCCI</p>
	<p class="price">$21.95</p>
  </div>
</div>

<div class="products">
  <a href="#"><img src="photos/product.jpg" style="width:100%"></a>
  <div class="container">
    <p class="bname">GUCCI</p>
	<p class="price">$21.95</p>
  </div>
</div>

<div class="products">
  <a href="#"><img src="photos/product.jpg" style="width:100%"></a>
  <div class="container">
    <p class="bname">GUCCI</p>
	<p class="price">$21.95</p>
  </div>
</div>

<div class="products">
  <a href="#"><img src="photos/product.jpg" style="width:100%"></a>
  <div class="container">
    <p class="bname">GUCCI</p>
	<p class="price">$21.95</p>
  </div>
</div>


