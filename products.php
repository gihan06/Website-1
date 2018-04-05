


<html>
<head>
<title> Products Page </title>
<link rel="stylesheet" type="text/css" href="my.css"

</head>
<body>
<div id="container">
<div id="headerdiv" >
<h1> Wellington Evolution  </h1>
</div>

<div id="navibar">
<ul> 
<li><a id="button1" href="home.php"> Home </a></li>
<li><a id="button2" > Products </a> </li>
<li><a id="button3" href="aboutus.php"> About Us </a></li>
<li><a id="button4" href="contactus.php"> Contact Us  </a></li>
<li><a id="button5" href="news.php"> News  </a></li>
<li><a id="button6" href="login.php"> Login</a></li>

</ul>
</div>
<P> All our super cars & details. </p>
<?php
   $dbhost = 'localhost';
   $dbuser = 'xyz';
   $dbpass = 'xyz';
   
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT PRODUCT_ID, PRODUCT_NAME, PRODUCT_CODE, PRODUCT_CONTACTINFORMATION, images FROM products';
   mysql_select_db('21402683');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "PRODUCT ID :{$row['PRODUCT_ID']}  <br> ".
         "PRODUCT NAME : {$row['PRODUCT_NAME']} <br> ".
         "PRODUCT CODE : {$row['PRODUCT_CODE']} <br> ".
		 "PRODUCT CONTACTINFORMATION : {$row['PRODUCT_CONTACTINFORMATION']} <br> ".
		 " <img style=\"height:300px;width:500px;\" src=\"{$row['images']}\"> <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>


<div id="footerdiv">______________________________________________ <br>
Copyright 2016 @ Wellington Evo. All rights reserved
</div>
</div>

</body>

</html>
