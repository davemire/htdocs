<?php

$items = explode(",",$_SESSION["order"]);
$sql="SELECT * FROM products";
$result=mysql_query($sql);

while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
for( $i = 0; $i < count($items); ++$i )

{

if ($items[$i]==$row['product_id'])
{
	echo $row['title']. ' - £'.$row['price'];
} 

}

}
?>
