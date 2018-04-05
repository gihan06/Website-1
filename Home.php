
<!DOCTYPE html>
<html>
<head>
<title> Home  Page </title>
<link rel="stylesheet" type="text/css" href="my.css">
				
</head>
<body>
<div id="container">
<div id="headerdiv" >
<h1> Wellington Evolution </h1>  

</div>

<div id="navibar">
<ul> 
<li> <a id="button7"> Home </a></li> 
<li><a id="button2" href="products.php"> Products </a> </li> 
<li><a id="button3" href="contactus.php"> Contact Us  </a></li> 
<li><a id="button4" href="aboutus.php"> About Us </a></li> 
<li><a id="button5" href="news.php"> News  </a></li> 
<li><a id="button6" href="login.php"> Login</a></li> 
</ul>
</div>

<p> All our wellington branches </p>


<?php
   $dbhost = 'localhost';
   $dbuser = 'xyz';
   $dbpass = 'xyz';
   
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT COMPANY_ID, COMPANY_NAME, COMPANY_ADDRESS, COMPANY_CONTACTINFORMATION, COMPANY_EMAIL FROM company';
   mysql_select_db('xyz');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "COMPANY ID :{$row['COMPANY_ID']}  <br> ".
         "COMPANY NAME: {$row['COMPANY_NAME']} <br> ".
         "COMPANY ADDRESS : {$row['COMPANY_ADDRESS']} <br> ".
		 "COMPANY CONTACTINFORMATION : {$row['COMPANY_CONTACTINFORMATION']} <br> ".
		 "COMPANY EMAIL : {$row['COMPANY_EMAIL']} <br> ".
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
