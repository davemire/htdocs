<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Sound Control</title>

	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>

	<div id="container">

	<div id="top">
<h1>Contact</h1>
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
Enter your contact details along with your query and one of our support team will get back to you as soon as possible!	
</p>

<table width="400" border="0" align="center" cellpadding="3" cellspacing="1">
<tr>
<td><strong>Contact Form </strong></td>
</tr>
</table>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td><form name="form1" method="post" action="send_contact.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td width="16%">Subject</td>
<td width="2%">:</td>
<td width="82%"><input name="subject" type="text" id="subject" size="50"></td>
</tr>
<tr>
<td>Detail</td>
<td>:</td>
<td><textarea name="detail" cols="50" rows="4" id="detail"></textarea></td>
</tr>
<tr>
<td>Name</td>
<td>:</td>
<td><input name="name" type="text" id="name" size="50"></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input name="customer_mail" type="text" id="customer_mail" size="50"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>



	<div id="footer">
<p>This website is a university assignment and not a real shop!</p>
<p>Philip Richardson 2010</p>
</div>

</div>


</body>

</html>