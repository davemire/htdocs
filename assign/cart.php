<?php
	$cost = number_format($_SESSION["cost"],2,".",",");
	echo '<div id="cart">';
	echo '<form name="cart" method="post" action="shopping-cart.php" >';
	echo '<p class="center">SHOPPING CART</p>';
	echo '<p>No of Items: <strong>'.$items.'</strong><br/>Total Price: <strong>£'.$cost.'</strong></p>';
	echo '<p class="button"><input type="submit" name="Submit" value=" Check Out &gt;&gt; "></p>';
	echo '</form>';
	echo '</div>';

?>
