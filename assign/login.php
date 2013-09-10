<?php
include("dblogin.php");
?>

<form name="loginform" method="post" action="check-login.php" >
	<p><strong>Enter your login details and click 'login':</strong></p>
	<p>Username:<br />
	<input type="text" name="user" size="20" value=""></p>
	<p>Password:<br />
	<input type="password" name="password" size="20" value=""></p>
	<p><input type="submit" name="Submit" value=" Login &gt;&gt; "></p>
</form>

