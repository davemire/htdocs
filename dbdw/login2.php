

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>P H P add -----</title>
<script language="JavaScript" src="validation.js" >
</script>
</head>

<body>
<?php
include('connect.php');
# $hostname="localhost"; $username="root"; $password="????????";
# $databasename="customers";

$dbhandle = mysql_connect($hostname, $username, $password); #----

if ($dbhandle == false ) { #----------------------
echo "<h3> Database Connection Failed</h3>\

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>P H P add -----</title>
<script language="JavaScript" src="validation.js" >
</script>
</head>

<body>
<?php
include('connect.php');
# $hostname="localhost"; $username="pgun"; $password="????????";
# $databasename="pgdb";

$dbhandle = mysql_connect($hostname, $username, $password); #----

if ($dbhandle == false ) { #----------------------
echo "<h3> Database Connection Failed</h3>\n ";
} else {

$err = mysql_select_db($databasename,$dbhandle); #-----
if ($err == false){
echo "<h3> Database Selection Failed</h3>\n";
} else {
$create_table_q="create table students (
stid char(9) NOT NULL PRIMARY KEY,
sname char(20) DEFAULT '',
fname char(20) DEFAULT '',
email char(30) DEFAULT '',
module1 char(6) DEFAULT '',
module2 char(6) DEFAULT '',
module3 char(6) DEFAULT '',
module4 char(6) DEFAULT '',
module5 char(6) DEFAULT '',
module6 char(6) DEFAULT ''
)";
if ( mysql_query($create_table_q,$dbhandle) ) #---------
echo "<p> table just created " ;
else
echo "<p> fail or table exists" ;
} #if ($err == false){
?>
<form name="f1" action="<?php $_SERVER['PHP_SELF'];?>" method="get">
<p>StudentID <input type="text" name="stid" onblur="stidregck(this);"/>
Surname <input type="text" name="sname" /> <br />
First name <input type="text" name="fname" />
E m a i l <input type="text" name="email" /> </p>
<p>module 1 <input type="text" name="mod1" onblur="modregck(this);"/>
module 2 <input type="text" name="mod2" /> <br />
module 3 <input type="text" name="mod3" />
module 4 <input type="text" name="mod4" /> <br />
module 5 <input type="text" name="mod5" />
module 6 <input type="text" name="mod6" />
</p>
<p> <input name="submit" type="submit" value="submit" />
</p>
</form>
<p>
<?php
if ( isset( $_REQUEST['submit'] ) ) { #---------
$to_insert="insert into students values ( '";
$to_insert .= $_REQUEST[stid] ."', ";
$to_insert .= $_REQUEST[sname] . "',' " . $_REQUEST[fname] . "', ";
$to_insert .= $_REQUEST[email] . "',' " . $_REQUEST[mod1] . "', ";
$to_insert .= $_REQUEST[mod2] . "',' " .$_REQUEST[mod3] . "', ";
$to_insert .= $_REQUEST[mod4] . "',' " .$_REQUEST[mod5] . "', ";
$to_insert .= $_REQUEST[mod6] . "' )";

echo "<p>" . $to_insert . "</p>" ;

if ( mysql_query($to_insert,$dbhandle) ) #---------
echo "<p>inserted</p>";
else echo "<p>not inserted because: " . mysql_error() ;
} # if ( isset( $_REQUEST['submit'] ) ) ---------
else echo "first time";
include('navigation.php');
} # if ($dbhandle == false ) ?>
</body>
</html>

 

n ";
} else {

$err = mysql_select_db($databasename,$dbhandle); #-----
if ($err == false){
echo "<h3> Database Selection Failed</h3>\n";
} else {
$create_table_q="create table students (
stid char(9) NOT NULL PRIMARY KEY,
sname char(20) DEFAULT '',
fname char(20) DEFAULT '',
email char(30) DEFAULT '',

)";
if ( mysql_query($create_table_q,$dbhandle) ) #---------
echo "<p> table just created " ;
else
echo "<p> fail or table exists" ;
} #if ($err == false){
?>
<form name="f1" action="<?php $_SERVER['PHP_SELF'];?>" method="get">
<p>StudentID <input type="text" name="stid" onblur="stidregck(this);"/>
Surname <input type="text" name="sname" /> <br />
First name <input type="text" name="fname" />
E m a i l <input type="text" name="email" /> </p>

</p>
<p> <input name="submit" type="submit" value="submit" />
</p>
</form>
<p>
<?php
if ( isset( $_REQUEST['submit'] ) ) { #---------
$to_insert="insert into students values ( '";
$to_insert .= $_REQUEST[stid] ."', ";
$to_insert .= $_REQUEST[sname] . "',' " . $_REQUEST[fname] . "', ";
$to_insert .= $_REQUEST[email] . "',' " . $_REQUEST[mod1] . "', ";
$to_insert .= $_REQUEST[mod2] . "',' " .$_REQUEST[mod3] . "', ";
$to_insert .= $_REQUEST[mod4] . "',' " .$_REQUEST[mod5] . "', ";
$to_insert .= $_REQUEST[mod6] . "' )";

echo "<p>" . $to_insert . "</p>" ;

if ( mysql_query($to_insert,$dbhandle) ) #---------
echo "<p>inserted</p>";
else echo "<p>not inserted because: " . mysql_error() ;
} # if ( isset( $_REQUEST['submit'] ) ) ---------
else echo "first time";
in ?>
</body>

</html>

 

