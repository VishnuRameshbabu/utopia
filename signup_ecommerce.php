<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="utopia_style.css">
<link rel="stylesheet" href="signin.css">
<title>utopia</title>
</head>
<body class="search"><p class="homeicon"><a href="utopiamain.html">&#x1F3E0; </a></p>
<div class="align">
	<p class="searchtitle">UTOPIA</p>
<?php
$dbc=mysqli_connect('sql12.freemysqlhosting.net','sql12295317','k9Ng5LuYRi','sql12295317')
or die("some error");
if(isset($_POST['submit'])){
$password=mysqli_real_escape_string($dbc,trim($_POST['password1']));
$password_re=mysqli_real_escape_string($dbc,trim($_POST['password2']));
$first_name=mysqli_real_escape_string($dbc,trim($_POST['first_name']));
$last_name=mysqli_real_escape_string($dbc,trim($_POST['last_name']));
$city=mysqli_real_escape_string($dbc,trim($_POST['city']));
$locality_address=mysqli_real_escape_string($dbc,trim($_POST['locality_address']));
$date_of_birth=mysqli_real_escape_string($dbc,trim($_POST['date_of_birth']));
$state=mysqli_real_escape_string($dbc,trim($_POST['state']));
$phone_no=mysqli_real_escape_string($dbc,trim($_POST['phone_no']));
$email_id=mysqli_real_escape_string($dbc,trim($_POST['email_id']));
if(!empty($password) and !empty($password_re) and ($password==$password_re))
{	
	$query="SELECT * from user_information where email_id='$email_id'";
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	if($row==0){
		$query="INSERT into user_information(first_name,last_name,email_id,password,date_of_birth,phone_no,locality_address,city,state) VALUES('$first_name','$last_name','$email_id','$password','$date_of_birth','$phone_no','$locality_address','$city','$state')";
		mysqli_query($dbc,$query);
		echo "<p> Your account has been successfully created!</p>";		
		mysqli_close($dbc);
	exit();
	}
	else{
		echo '<p class="error"> email id already exists please choose another one :( <p/>';
	
	$username="";}
} 
else{
	echo '<p class="error">You must enter all of the sign-up data, including the desired password '.
'twice.</p>'; 
}
}
mysqli_close($dbc);
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<p class="p">first_name:<input type="text" name="first_name"id="first_name" size="30" maxlength="60" value="<?php if(!empty($first_name)){echo $first_name;}?>"/><br />
	<p class="p">last_name:<input type="text" name="last_name" id="last_name"size="30" maxlength="60" value="<?php if(!empty($last_name)){echo $last_name;}?>"/><br />
	<p class="p">Password:<input type="Password" name="password1" id="password1" value="password" /><br />
	<p class="p">Retype Password<input type="Password" name="password2" id="password2" value="password"/><br />
	<p class="p">Gender:<select id="Gender" name="Gender">
	<option value="M" <?php if(!empty($gender)&& $gender=='M') echo 'selected ="selected"';?>>Male</option>
	<option value="F" <?php if(!empty($gender)&& $gender=='F') echo 'selected ="selected"';?>>Female</option>
</select><br />
	<p class="p">Date_of_Birth:<input type="Date" name="date_of_birth" id="date_of_birth"/><br />
	<p class="p">Phone_Number:<input type="text" name="phone_no"id="phone_no" size="30" maxlength="10" /><br />

	<p class="p">email_id:<input type="text" name="email_id" id="email_id" size="30" maxlength="100"/><br />
	<p class="p">locality_address:<input type="text" name="locality_address" id="locality_address" size="30" maxlength="100"/><br />
	<p class="p">city:<input type="text" name="city" id="city" size="30"/><br />
	<p class="p">State:<input type="text" name="state" id="state" size="30"/><br />
<input type="submit" value="Sign up" name="submit">	
</form>
</div>
</body>
</html>