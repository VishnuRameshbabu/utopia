<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="utopia.css">
<link rel="stylesheet" href="login.css">
<title>utopia</title>
</head>

<?php
extract($_REQUEST);
if(isset($sub))
{
$id=$_REQUEST['t1'];
$pass=$_REQUEST['p1'];
$dbc=mysqli_connect('sql12.freemysqlhosting.net','sql12295317','k9Ng5LuYRi','sql12295317');
$sel=mysqli_query($dbc,"select * from user_information where email_id='$id'")   ;
$arr=mysqli_fetch_array($sel);
if(($arr['email_id']==$id) and( $arr['password']==$pass))
  {
$user_id=$arr['user_id'];
$first_name=$arr['first_name'];
 $_SESSION['eid']=$user_id;
 $_SESSION['name']=$first_name;
 echo "<script>location.href='utopia.php'</script>";
   }
else
{
$er="id and password do not match :(";
echo $er;
}
}
?>
<body class="search"><p class="homeicon"><a href="utopiamain.html">&#x1F3E0; </a></p>
<div class="align">
<p class="searchtitle">UTOPIA</p>
<form method="post">
<p class="p">UserID:
      <input name="t1" type="text" id="t1">
    </p>
    <p class="p">Password:<input name="p1" type="password" id="p1"><br/>

<input type="submit" name="sub" value="Login" style="font-weight:bold">
</input>
</p>
</form>
</div>
</body>
</html>