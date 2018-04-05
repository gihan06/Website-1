<!DOCTYPE html>
<html>
<head>
<title> Contact us  Page </title>
<link rel="stylesheet" type="text/css" href="my.css">

<script>
function send() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
    }
	else {
	alert("Thankyou Your Message Has Been Sent");
	}
}
function reset() {
    document.getElementById("forms").reset();
}

</script>



</head>
<body>


<div id="container">
<div id="headerdiv" >
<h1> Wellington Evolution  </h1>
</div>

<div id="navibar">
<ul>
<li><a id="button1" href="home.php"> Home </a></li> 
<li><a id="button2" href="products.php"> Products </a> </li> 
<li><a id="button3" href="aboutus.php"> About Us </a></li> 
<li><a id="button4" > Contact Us  </a></li> 
<li><a id="button5" href="news.php"> News  </a></li> 
<li><a id="button6" href="login.php">Login</a></li> 

</ul>
</div>

<div id="mapdiv">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:600px;"><div id="gmap_canvas" style="height:700px;width:700px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.mapembed.com" id="get-map-data">www.mapembed.com</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(-41.3182023,174.80277739999997),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-41.3182023, 174.80277739999997)});infowindow = new google.maps.InfoWindow({content:"<b>Welligton Evolution</b><br/>2, Troy Street <br/>1516 wellington" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>

<div id="formdiv">
<form name="frm" method="post" action="thankyou.php">
<b>Contact Us</b><br>
Name:<input class="formfield" id="name" type="text" placeholder="write your name...................." > </input> <br> 
Occupation:<input class="formfield" id="email" type="text" placeholder="write your occupation......." > </input> <br>
Address:<input class="formfield" id="comment" type="text" rows="5" placeholder="write a comment"> </input> <br>
Contact Number:<input class="formfield" id="email" type="number" placeholder="write your contact number" > </input> <br>
Email Adress:<input class="formfield" id="email" type="text" placeholder="write your email " > </input> <br>
Subject:<input class="formfield" id="email" type="text" placeholder="write the subject" > </input> <br>
Number:<input class="formfield" id="email" type="number" placeholder="write your number" > </input> <br> 
Email: <input type="text" name="email" placeholder="Enter Email Address" /> <br> 

<input type="button" onclick="reset()" value="Clear">
<input type="submit" value="Submit" onclick="return val();" />

<script type="text/JavaScript"> 
       function print_current_page()
	   {
	    window.print();
		}
		</script>
<button onclick="print_current_page()"> Print  </button>
<div>
</div>

</form>

</div>

<div id="footerdiv">______________________________________________ <br>
Copyright 2016 © Wellington Evo. All rights reserved
</div>



</body>

</html>