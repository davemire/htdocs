<?php
include("dblogin.php");
 
 $user=$_POST["user"];
 $pass=$_POST["password"];
 
 $sql="SELECT * FROM login";
 $result=mysql_query($sql);
 
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
 
 if($user==$row["username"] && $pass==$row["password"])
 {
 $_SESSION["userid"]=$row["id"];
 $_SESSION["cost"]=0;
 $_SESSION["products"]=0;
 $_SESSION["order"]="";
 header ('Location: products.php');
 }

if ($_SESSION["userid"]=="")
{
 header ('Location: login.php');
}

}
 

?>
