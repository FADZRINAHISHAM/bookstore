<title>Book Registration </title>
</head>
<html>
<body bgcolor="#FFCCFF">
<div align="center">
  <table width="830" height="276">
    <tr>
      <td bgcolor="#FFFFFF"><p align="center"><img src="banner.jpg" width="806" height="105"></p>
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
                  <td width="92"><div align="center"><a href="#" onClick="history.back()"/><img src="back.jpg" width="55" height="44"/></a></a></div></td>
                  <td width="92"><div align="center"><a href="menu.php"><img src="home.gif" alt="" width="55" height="44" /></a></div></td>
                </tr>
          </table>
            </div>
            <p align="center">
             <?php
		/* include db connection file */
		include("dbconn.php");
		if(isset($_POST['submit'])){
		/* capture values from HTML form */
		
		$booktitle = $_POST['booktitle'];
		$bookauthor = $_POST['bookauthor'];
		$bookpublisher = $_POST['bookpublisher'];
		$bookqty = $_POST['bookqty'];
		$booksupplier = $_POST['booksupplier'];
		
		
		$sql0 = "SELECT booktitle FROM book WHERE booktitle = '$booktitle' ";
		$query0 = mysql_query($sql0) or die ("Error: " . mysql_error());
		$row0 = mysql_num_rows($query0);
		if($row0 != 0){
		echo 'Record Exist! Click <a href="insert_book.php">Insert Book</a> to Add. ';
		}
		else{
		/* execute SQL INSERT command */
		$sql2 = "INSERT INTO book (booktitle, bookauthor, bookpublisher, bookqty, booksupplier)
		
		VALUES ('" . $booktitle . "', 
				'" . $bookauthor . "', 
				'" . $bookpublisher . "',
				'" . $bookqty . "', 
				'" . $booksupplier . "' )";
		mysql_query($sql2) or die ("Error: " . mysql_error());
		
		/* display a message */
		
		echo 'Data has been succesfully saved. Click <a href="menu.php">Back</a> to Main Menu';
		
		}
		}
?>
</p>
        <p align="center">&nbsp;</p></td>
    </tr>
  </table>
</div>
 <?php
}
mysql_close($dbconn);

?>
</body>
</html>