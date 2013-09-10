

<?php

$mysql_host = "localhost"; // 
$mysql_database = "tester"; // 
$mysql_user = "phil"; // Mysql username
$mysql_password = "phil1"; // Mysql password

	echo '<div id="cart">';
	echo '<form name="cart" method="post" action="shopping-cart.php" >';
	echo '<p class="center">SHOPPING CART</p>';
	echo '<p>No of Items: <strong>'.$items.'</strong><br/>Total Price: <strong>£'.$cost.'</strong></p>';
	echo '<p class="button"><input type="submit" name="Submit" value=" Check Out &gt;&gt; "></p>';
	echo '</form>';
	echo '</div>';

?>
