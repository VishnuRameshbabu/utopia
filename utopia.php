 <?php
 error_reporting(1);
session_start();
extract($_REQUEST);
if($_REQUEST['log']=='out')
{
session_destroy();
header("location:hosp_index.html");
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
  <?php
if($_SESSION['name']==True){
    echo '<a href="signup_ecommerce.php">'.$_SESSION['name'].'</font></a>'; }
    else{
 echo'<p class="icon"><a href="signup_ecommerce.php">&#128102;</a>';
}
 ?>
  <!-- <a href="#cart">Cart</a> -->
  <?php
if($_SESSION['name']==True){
    echo '<a href="?log=out">Logout</font></a>'; } ?>
  <a href="searchfunc_utopia.php">&#128269;</a>
</div>
<!-- <img src="stuff/men.jpg" style="width:100%"><hr>
<p style="font-family:Calibri;font-size:30px;color:red;font-weight:bold;margin-left:2%">
OUR PRODUCTS</p>
 --><?php
$dbc=mysqli_connect('sql12.freemysqlhosting.net','sql12295317','k9Ng5LuYRi','sql12295317')
or die("some error");
$rand=mt_rand(1,4);//kV5lX4wmSt
$query="SELECT * from product where category_id=$rand";
$result=mysqli_query($dbc,$query);
if ($rand==1) {
  echo '<img src="stuff/men.jpg" style="width:100%"><hr>
<p style="font-family:Calibri;font-size:30px;color:red;font-weight:bold;margin-left:2%">
OUR PRODUCTS</p>';
}
elseif ($rand==2) {
  echo '<img src="stuff/women.jpg" style="width:100%"><hr>
<p style="font-family:Calibri;font-size:30px;color:red;font-weight:bold;margin-left:2%">
OUR PRODUCTS</p>';

}
elseif ($rand==3) {
  echo '<img src="stuff/electronics.jpg" style="width:100%"><hr>
<p style="font-family:Calibri;font-size:30px;color:red;font-weight:bold;margin-left:2%">
OUR PRODUCTS</p>';

}
else{
  echo '<img src="stuff/Home decor.jpg" style="width:100%"><hr>
<p style="font-family:Calibri;font-size:30px;color:red;font-weight:bold;margin-left:2%">
OUR PRODUCTS</p>';}
while($row=mysqli_fetch_array($result)){
  $id_prod=$row['product_id'];
echo '<div class="products"> <a href="details.php?id='.$id_prod.'"> <img src="stuff/'.$row['image'] .'" style="width:100% ;"></a> <div 
class="container"><p class="bname">'.$row['product_name'].'</p><p class="price">Rs'.$row['price'].'</p></div> </div>';}
//?>
</body>
</html>
<!-- don't know why metronaut jeans aint showing up even  though the image is there  -->
