<?php

include('dblogin.php'); //include login details

echo '<h1>Order Table</h1>';

echo '<p>This page displays the orders that are held within the orders table in your databse.</p>';

$sql="SELECT * FROM orders"; //select orders from the database
$result=mysql_query($sql);

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) { //display orders from the database
    echo ''.$row["order_id"].' - '.$row["customer_id"].' - '.$row["order_details"].' - '.$row["total_price"].'';
	echo '<br />';
}

?>