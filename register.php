

<!doctype html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="my.css">

</head>
<body>

<div id="container">
<div id="headerdiv" >
<h1> Wellington Evolution </h1> 
 
</div>

<div id="navibar">
<ul> 
<li><a id="button1" href="home.php"> Home </a></li>
<li><a id="button2" href="products.php"> Products </a> </li>
<li><a id="button3" href="contactus.php"> Contact Us  </a></li>
<li><a id="button3" href="aboutus.php"> About Us </a></li>
<li><a id="button3" href="news.php"> News  </a></li>
<li><a id="button3" > Login</a></li>

</ul>

</div>

<?php 
   $dbhost = 'localhost';
   $dbuser = 'xyz';
   $dbpass = 'xyz';
   $dbname ='xyz';

if(isset($_POST["submit"])){

if(!empty($_POST['Username']) && !empty($_POST['PASSWORD'])) {
	$user=$_POST['Username'];
	$pass=$_POST['PASSWORD'];

	$con=mysql_connect('localhost','xyz','xyz') or die(mysql_error());
	mysql_select_db('21402683') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM login WHERE Username='".$user."' AND PASSWORD='".$pass."'" );
	$numrows=mysql_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO login(Username,PASSWORD) VALUES('$user','$pass')";

	$result=mysql_query($sql);


	if($result){
	echo "Account Successfully Created";
	} else {
	echo "Failure!";
	} 

	} else {
	echo "That username already exists! Please try again with another.";
	}

} else {
	echo "All fields are required!";
}
}
?>



<div id="regi">
<a href="register.php">Register</a> | <a href="login.php">Admin Login</a>
</div>

<div id="h1">
<h3>User Registration Form</h3>
</div>

<div id="button">
<form action="" method="POST">
Username: <input type="text" name="Username"><br />
Password: <input type="password" name="PASSWORD"><br />	
<input type="submit" value="Login" name="submit" />
</div>

</form>




<div id="footerdiv">______________________________________________ <br>
Copyright 2016 @ Wellington Evo. All rights reserved
</div>

</div>

</body>
</html>
