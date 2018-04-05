
<!DOCTYPE html>
<html>
<head>
<title> News Page </title>
<link rel="stylesheet" type="text/css" href="my.css">
				
</head>
<body>
<div id="container">
<div id="headerdiv" >
<h1> Wellington Evolution </h1>  

</div>
<div id="body">
<div id="navibar">
<ul> 
<li><a id="button7" href="Home.php"> Home </a></li>
<li><a id="button2" href="products.php"> Products </a></li> 
<li><a id="button3" href="contactus.php"> Contact Us  </a></li>
<li><a id="button4" href="aboutus.php"> About Us </a></li>
<li><a id="button5" > News  </a></li>
<li><a id="button6" href="login.php">Login</a></li>
</ul>
</div>
<?php
   $dbhost = 'localhost';
   $dbuser = '21402683';
   $dbpass = '21402683';
   
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT NEWS_ID, NEWS_NAME, NEWS_CODE FROM news';
   mysql_select_db('21402683');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "NEWS ID :{$row['NEWS_ID']}  <br> ".
         "NEWS NAME : {$row['NEWS_NAME']} <br> ".
         "NEWS CODE : {$row['NEWS_CODE']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>

</div>




<div id="footerdiv">______________________________________________ <br>
Copyright 2016 @ Wellington Evo. All rights reserved
</div>
</div>
</div>
</html>