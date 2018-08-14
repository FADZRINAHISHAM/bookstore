<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu</title>
</head>

<body bgcolor="#FFCCFF">

  <div align="center">
    <table width="830" height="391">
      <tr bgcolor="#FFFFFF">
        <td><p align="center"><img src="banner.jpg" width="1030" height="140" align="middle" /></p>
          <div align="right">
            <?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username'] == "Administrator"){
?>
          Hi, <?php echo $_SESSION['username']; ?> [<a href="logout.php">Logout</a>]</div>
<div align="center">
          <table width="63" height="52" border="1">
              <tr>
                <td width="92" bgcolor="#FFCCFF"><div align="center"><a href="menu.php"><img src="home.gif" alt="" width="55" height="44" /></a></div></td>
              </tr>
            </table>
          </div>
          <div align="center"></div> 
<div align="center">
          <table width="738" height="444" border="50">
              <tr>
                <td height="42" colspan="2" bgcolor="#CCCCCC">&nbsp;</td>
              </tr>
              <tr>
                <td width="396" height="130" bgcolor="#FF9966"><div align="center">
                  <p><a href="insert_book.php"><img src="book.png" width="207" height="207" /></a></p>
                  <p><strong>INSERT BOOK</strong></p>
                </div></td>
                <td width="349" bgcolor="#FF9966"><div align="center">
                  <p><a href="display_books.php"><img src="display.png" width="207" height="207" /></a></p>
                  <p><strong>DISPLAY BOOK</strong>S</p>
                </div></td>
              </tr>
              <tr>
                <td height="45" colspan="2" bgcolor="#CCCCCC">&nbsp;</td>
              </tr>
            </table>
            <p>&nbsp;</p>
          </div></td>
      </tr>
      </table>
  </div>
<div align="center">
  <p>&nbsp;</p>
</div>
</body>
</html>
<?php
}
else{
header("Location: login.php");
}
?>

</body>
</html>
