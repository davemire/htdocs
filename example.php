<?php
     $name = "Matt ";
     $surname = "Horton";
     $num1 = 5;
     $num2 = 20;
	$name2 = "Phil ";
	$sname = "Richardson";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>PHP Examples</title>
</head>

<body>

<?php
     echo '<p>This code was output using PHP</p>';
?>

<p>
     <?php echo 'This code was output using PHP'; ?>
</p>

<?php
	echo '<p>My lecturer is called '.$name.'</p>';
	echo '<p>My lecturer is called '.$name.$surname.'</p>';
	$fullname = $name.$surname;
	echo '<p>My lecturer is called '.$fullname.'</p>';
	$answer = $num1 + $num2;
	echo 'Sum: '.$num1.' + '.$num2.' = '.$answer;
	echo '<p>';
	echo 'My lecturer is called ';
	echo $name;
	echo '</p>';

?>

<?php
	echo date("l dS F Y")."\n"; 
	echo date("H:i:s")."<br\>";
?>

<?php
	echo '<p>My name is '.$name2.'</p>';
	echo '<p>My name is '.$name2.$sname.'</p>';

?>
</body>

</html>
