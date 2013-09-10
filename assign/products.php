<?php
 include("dblogin.php");
if ($_SESSION["userid"]=="")
{
 header ('Location: login.php');
}
 
if ($_GET["add"]=="true")
{
 $_SESSION["cost"]=($_SESSION["cost"]+$_POST["price"]);
 $_SESSION["items"]=$_SESSION["items"]+1;
 $_SESSION["order"]=$_SESSION["order"].$_POST["id"].",";
}
 
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
<h1>Product Page</h1>
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
<?php
	if ($_SESSION["userid"]!="") 
	{
		include("cart.php");
	}
	?>
</div>



	<div id="content">

<?php
 
$sql="SELECT * FROM products";
$result=mysql_query($sql);
 
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
 echo '<div id="products">';
 echo '<form name="cart" method="post" action="products.php?add=true">';
 echo '<table><tr>';
    echo '<td><h2>'.$row["title"].'</h2><p>'.$row["description"].'</p></td><td>£'.$row["price"].'</td><td><input type="submit" name="Submit" value=" Add to Cart"></td>';
 echo '<input type="hidden" name="id" value="'.$row["product_id"].'">';
 echo '<input type="hidden" name="price" value="'.$row["price"].'">';
 echo '</table></tr>';
 echo '</form>';
 echo '</div>';
 

}
 
?>
	</div>

	<div id="footer">
<p>This website is a university assignment and not a real shop!</p>
<p>Philip Richardson 2010</p>
</div>

</div>


</body>

</html>