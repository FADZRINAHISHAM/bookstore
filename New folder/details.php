<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>details</title>
</head>
<body bgcolor="#FFCCFF">
<div align="center">
  <table width="830" height="391">
    <tr>
      <td width="596" bgcolor="#FFFFFF"><p align="center"><img src="banner.jpg" width="759" height="106">
        </p>
        <p align="right">
<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username'] == "Administrator")
{
?>
          Hi, <?php echo $_SESSION['username']; ?> [<a href="logout.php">Logout</a>]</p></p>
      </p>
        <div align="center">
          <table width="124" height="52" border="1">
            <tr bgcolor="#FFCCFF">
              <td width="92" bgcolor="#FFCCFF"><div align="center"><a href="../bookstore/display_books.php"/><img src="back.jpg" width="55" height="44"/></a></div></td>
              <td width="92"><div align="center"><a href="menu.php"><img src="home.gif" alt="" width="55" height="44" /></a></div></td>
            </tr>
          </table>
          <?php
if (isset($_GET['booktitle']))
$booktitle = $_GET['booktitle'];
else
$booktitle = 0;
include ("dbconn.php");
$query = "SELECT * FROM bookstore WHERE booktitle = '$booktitle' ";
$result = mysql_query($query) or die('SQL error');
$row = mysql_fetch_array($result, MYSQL_ASSOC);
?>
<table width="76%" height="634" border="50"  bgcolor="#CCCCCC">
            <tr>
            <td width="494" height="530" bgcolor="#FF99FF">
                <h2 align="center"><strong>Details <?php echo $row['booktitle']; ?> </strong></h2>
                <div align="center">
                  <table width="508" height="442"  border="3" cellpadding="5">
                    <td width="130" bgcolor="#FF99FF"><div align="left">Book Title</div></td>
                      <td width="342" bgcolor="#FFFFFF"><div align="left"><?php echo $row['bookstore']; ?></div></td>
                      </tr>
                    <tr>
                      <td bgcolor="#FF99FF"><div align="left">Book Author</div></td>
                      <td bgcolor="#FFFFFF"><div align="left"><?php echo $row['bookauthor']; ?></div></td>
                    </tr>
                    <tr>
                      <td bgcolor="#FF99FF"><div align="left">Book Publisher</div></td>
                      <td bgcolor="#FFFFFF"><div align="left"><?php echo $row['bookpublisher']; ?></div></td>
                    </tr>
                    <tr>
                      <td bgcolor="#FF99FF"><div align="left">Book Quantity</div></td>
                      <td bgcolor="#FFFFFF"><div align="left"><?php echo $row['bookqty']; ?></div></td>
                    </tr>
                    <tr></tr>
                    
                    <td bgcolor="#FF99FF"><div align="left">Book Supplier</div></td>
                      <td bgcolor="#FFFFFF"><div align="left"><?php echo $row['booksupplier']; ?></div></td>
  <?php
}
?>
                  </table>
                </div>
                <div align="center">
                  
                  <form id="form1" name="form1" method="post" action="">
                    <table width="131" height="69" border="3" cellpadding="2" cellspacing="2">
                      <tr bgcolor="#FFCCFF">
                        <td><div align="center">
                          <h5><a href="update.php?booktitle=<?php echo $row['booktitle']; ?>"><img src="update.gif" width="46" height="36" /></a><strong>Update</strong></h5>
                          </div></td>
                        
                        <td><div align="center">						
                    <h5><a href="Delete.php?booktitle=<?php echo $row['booktitle']; ?>"><img src="delete.gif" width="46" height="36" /></a><strong>Delete</strong></h5>
                        </div></td>
                      </tr>
                    </table>
                  </form>
                </div>
           
        
      </table>
          <p>&nbsp;</p>
        </div>
      <div align="center"></div></td>
    </tr>
  </table>
</div>
</body>
</html>




