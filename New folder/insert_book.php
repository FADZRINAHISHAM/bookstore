<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Registration</title>
</head>
 
<html>
<body bgcolor="#FFCCFF">
<div align="center">
  <table width="841" height="827">
    <tr>
      <td bgcolor="#FFFFFF"><div align="center"><img src="banner.jpg" width="835" height="106" />
        </div>
        <p align="center">
          <?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username'] == "Administrator"){
?>
        </p>
      <p align="right">Hi, <?php echo $_SESSION['username']; ?> [<a href="logout.php">Logout</a>]</p>
      <div align="center">
        <table width="113" height="55" border="1">
          <tr>
            <td width="92" bgcolor="#FFCCFF"><div align="center"><a href="#" onclick="history.back()"/><img src="back.jpg" width="55" height="44"/>
</div></td>
            <td width="92" bgcolor="#FFCCFF"><div align="center"><a href="menu.php"><img src="home.gif" alt="" width="55" height="44" /></a></div></td>
            </tr>
        </table>
      </div>
      
<form name="form" method="post" action="insert_bookEngine.php">
        <div align="center"></div>
    <div align="center"></div>
  
<?php  
}
?>
 <div align="center">
<table width="596" height="435" border="50">
      <tr>
        <td height="53" colspan="2" bgcolor="#999999"><h2 align="center"><strong>BOOK REGISTRATION</strong></h2></td>
      </tr>
      <tr>
        <td width="170" height="41" bgcolor="#FF99FF"><div align="left">Book Title</div></td>
        <td width="278" bgcolor="#CCCCCC"><div align="center">
          <input name="booktitle" type="text" id="booktitle" required/>
        </div></td>
      </tr>
      <tr>
        <td height="34" bgcolor="#FF99FF"><div align="left">Book Author</div></td>
        <td bgcolor="#CCCCCC"><div align="center">
          <input name="bookauthor" type="text" id="bookauthor" required />
        </div></td>
      </tr>
      <tr>
        <td height="53" bgcolor="#FF99FF"><div align="left">Book Publisher</div></td>
        <td bgcolor="#CCCCCC"><div align="center">
          <input name="bookpublisher" type="text" id="bookpublisher" required/>
        </div></td>
      </tr>
      <tr>
        <td height="35" bgcolor="#FF99FF"><div align="left">Book Quantity</div></td>
        <td bgcolor="#CCCCCC"><div align="center">
          <input name="bookqty" type="int" id="bookqty" required/>
          </div></td>
      </tr>
 
        <tr>
          <td height="45" bgcolor="#FF99FF"><p align="left">Book Supplier</p></td>
          <td height="45" bgcolor="#CCCCCC"><div align="center">
            <input name="booksupplier" type="text" id="booksupplier" />
            </div></td>
        </tr>  
      <tr>
        <td height="58" colspan="2" bgcolor="#999999"><div align="center">
          <input class = "button" type="submit" onClick="return confirm_alert(this);" name="submit" value="Add" />
          <input class="button"  type="reset" onClick="return confirm_alert2(this);" name="reset" value="Reset" />
          
          <script>
		//alert on delete
		function confirm_alert(node) {
		return confirm("Anda betul-betul pasti dengan data yang anda masukkan? Sila semak sekali lagi. Tekan OK untuk teruskan Tekan Cancel untuk balik ");
		}
		</script>
        
        <script>
		//alert on delete
		function confirm_alert2(node) {
		return confirm("Are you sure to reset? Click OK to continue and click CANCEL to go back.");
		}
		</script>
          
        </div></td>
      </tr>
    </table>
<br>
  </div>
</form>

    </tr>
  </table>
</div>


</body>
</html>