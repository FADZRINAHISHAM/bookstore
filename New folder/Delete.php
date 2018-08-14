<html>
<title>delete</title>
<body bgcolor="#FFCCFF">
<div align="center">
  <table width="830" height="391">
    <tr>
      <td bgcolor="#FFFFFF"><p align="center"><img src="banner.jpg" width="759" height="106"/></p>
      
          <p align="right">
<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username'] == "Administrator")
{
?>
          Hi, <?php echo $_SESSION['username']; ?> [<a href="logout.php">Logout</a>]</p>
          
            <div align="center">
  <table width="124" height="52" border="1">
    <tr bgcolor="#FFCCFF">
      <td width="92" bgcolor="#FFCCFF"><div align="center"><a href="display_books.php" onClick="history.back()"/><img src="back.jpg" width="55" height="44"/></a></div></td>
      <td width="92"><div align="center"><a href="menu.php"><img src="home.gif" alt="" width="55" height="44" /></a></div></td>
    </tr></table>
 
              
            </div>
        <p align="center">
          <?php
include ("dbconn.php");
$booktitle=$_GET['booktitle'];
// Delete data in mysql from row that has this tracknum
$sql="DELETE FROM bookstore WHERE booktitle='$booktitle'";
$result=mysql_query($sql);
// if successfully deleted


if($result){
echo 'Succesfully deleted. Click <a href="menu.php">Back</a> to main menu';
}
else {
echo "Error !";
}
?>
</p>
  <div align="center">
    <?php
mysql_close();
}
?>
    
  </div>
      </TABLE>
</div>
</body>
</html>