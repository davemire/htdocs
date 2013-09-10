<?php
	include("dblogin.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Sound Control</title>

	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>

	<div id="container">

	<div id="top">
<h1>About Us</h1>
<?php 
	
	if ($_SESSION["userid"]!="") 
	{
		echo '<p><a href="logout.php">Logout</a></p>';
	}
	
?>


	</div>
	
	<div id="linkbar">
<table>	
 
<tr>	
	<td><a href="home.php"> Homepage </a></td><td><a href="products.php"> Products </a></td> <td><a href="about.php"> About Us </a></td> <td><a href="contact.php"> Contact </a></td>
</tr>
 
</table>
	<p class=image><img src="images/marleybanner.jpg" height=200 width =600 alt = "bmarley"></p>
	</div>


	<div id="leftnav">

	
	</div>

	<div id="content">

<h2>This is Sound Control!</h2>
<p>

<p>
Sound Control was founded in 2002. Our goal at Sound Control is to provide our customers with top quality entertainment, available in one place to make the shopping experience easier so you can spend more time enjoying the great CDs, DVDs and Games we have on offer.
</p>
<p> 
Please browse the products we have available. We love to hear from our customers so if you wish to contact the administrators of the site follow the link to the contact page and fill out your information there. </p>
	</div>

	<div id="footer">
<p>This website is a university assignment and not a real shop!</p>
<p>Philip Richardson 2010</p>
</div>

</div>


</body>

</html>