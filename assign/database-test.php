<?php

$mysql_host = "localhost"; // Host name
$mysql_database = "assign"; // Database name
$mysql_user = "root"; // Mysql username
$mysql_password = ""; // Mysql password

// Connect to server and select databse.
mysql_connect("$mysql_host", "$mysql_user", "$mysql_password")or die("cannot connect");
mysql_select_db("$mysql_database")or die("cannot select DB");

echo '<h1>You have successfully connected to your database!!!</h1>';

echo '<p>This page will show you that your database has been set up correctly and that the PHP connection to the database is working properly.</>';

echo '<p>It also shows you a simple select statement for getting the information our of the products table and how you can loop an array and make its contents appear on the screen.</p>';

$sql="SELECT * FROM products";
$result=mysql_query($sql);

echo '<h2>Here is the data in your products table</h2>';

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo ''.$row["product_id"].' - '.$row["title"].' - '.$row["description"].' - '.$row["price"].'';
	echo '<br />';

	$csv.= $row ['title'].','; 
}

echo ($csv);



?>