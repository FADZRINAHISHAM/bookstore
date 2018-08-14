<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
/* php& mysqldb connection file */
$user = "root"; //mysqlusername
$pass = ""; //mysqlpassword
$host = "localhost"; //server name or ipaddress
$dbname= "bookstore"; //your db name
$dbconn= mysql_connect($host, $user, $pass);
if(isset($dbconn)){
mysql_select_db($dbname, $dbconn) or die("<center>Error: " . mysql_error() . "</center>");
}
else{
echo "<center>Error: Could not connect to the database.</center>";
}
?>



</body>
</html>
