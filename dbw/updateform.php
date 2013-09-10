<html>

<head>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<title> UPDATE DETAILS </title>
<script type="text/javascript">
    function validateForm()
    {
	
    var a=document.forms["form2"]["txtUser"].value;
    var b=document.forms["form2"]["txtPassword"].value;

    if ((a==null || a=="") && (b==null || b==""))
    {
    alert("All Field must be filled out");
    return false;
    }
    if (a==null || a=="")
    {
    alert("Username must be filled out");
    return false;
    }
    if (b==null || b=="")
    {
    alert("Password must be filled out");
    return false;
    }
    }
    </script>
</head>


<form name="update" action="update.php" onsubmit="return validateForm()" method="post">


Name:
 
<input type="text" name="user" />
 
Password:
 
<input type="text" name="userpassword" />
<input type="submit" name="Submit" value="update" />
</form>
<p> Phil's Houses 2012 </p> 
<a href="view-source:http://localhost/dbw/updateform.php">
View Source</a>
</html>