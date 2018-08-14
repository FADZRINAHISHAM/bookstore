<html>
<title>displaybooks</title>
<body bgcolor="#FFCCFF">
<div align="center">
  <table width="830" height="391">
    <tr>
      <td bgcolor="#FFFFFF"><p align="center"><img src="banner.jpg" width="759" height="106"/></p>
        <div align="right">
          <p>
<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username'] == "Administrator")
{
?>
          Hi, <?php echo $_SESSION['username']; ?> [<a href="logout.php">Logout</a>]</p>
          <div align="center">
            <table width="124" height="52" border="1">
              <tr bgcolor="#FFCCFF">
<td width="92" bgcolor="#FFCCFF"><div align="center"><a href="menu.php"/><img src="back.jpg" width="55" height="44"/></a></div></td>
<td width="92"><div align="center"><a href="menu.php"><img src="home.gif" alt="" width="55" height="44" /></a></div></td>
</tr></table>

  </p>
          </div>
          
      </div></td>
    </tr>
  </table>
  
  
  
  
</div>

  <div align="center">
  <p>
    <?php
	include ("dbconn.php");

	//$booktitle=$_POST['booktitle'];
	$select="SELECT * FROM book ";
	//$from="FROM bookstore WHERE booktitle ='$booktitle'";
	//$query=$select.$from;
	$result=mysql_query($select);
	$row= mysql_num_rows($result);
	
	if($row >0)
	{ 
	
	?>
  </p>
  <TABLE width="462" height="191" border="50" cellpadding="9" cellspacing="0">
    <TR>
<TH width="82" bgcolor="#FF99FF"><strong>Book's Title</strong></TH>
<th width="70" bgcolor="#FF99FF"><strong>Details</strong></th>
<th width="72" bgcolor="#FF99FF"><strong>Update</strong></th>
<th width="58" bgcolor="#FF99FF"><strong>Delete</strong></th>
</TR>

<?php
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
?>
<TR bgcolor="#FFFFFF">
<td height="62"><div align="center"><?php echo $row['booktitle']; ?></div></td>
<td><div align="center"><a href="details.php?booktitle=<?php echo $row['booktitle'];?>"><img src="details.gif" width="56" height="43" /></a></div></td>
<td><div align="center"><a href="process0.php?booktitle=<?php echo $row['booktitle']; ?>"></a><a href="update.php?booktitle=<?php echo $row['booktitle']; ?>"><img src="update.gif" width="56" height="43" /></a></div></td>
<td><div align="center"><a href="Delete.php?booktitle=<?php echo $row['booktitle']; ?>"><img src="delete.gif" width="56" height="43" /></a></div></td>
</TR>

<?php
}
}
}

?>

</TABLE>
</div>
</body>
</html>