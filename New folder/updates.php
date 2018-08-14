<title>Maklumat </title>
</head>
<html>
<body bgcolor="#FFCCFF">
<div align="center">
   <table width="830" height="391">
    <tr>
      <td bgcolor="#FFFFFF">
      <div align="center"><img src="banner.jpg" width="759" height="106"/>
      </div>
<form name="form" method="post" action="updates.php">
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
                <td width="92"><div align="center"><a href="..//staff/updates.php"/><img src="back.jpg" width="55" height="44"/></a></a></div></td>
                <td width="92"><div align="center"><a href="menus.php"><img src="home.png" alt="" width="55" height="44" /></a></div></td>
          </tr>
          </table>
            <p>
              <?php
/* include db connection file */
include ("dbconn.php");
/* update process */
if(isset($_POST['Update'])){
$staffid = $_POST['staffid'];
$staffname = $_POST['staffname'];
$staffic = $_POST['staffic'];
$staffadd = $_POST['staffadd'];
$staffage = $_POST['staffage'];
$staffphonenum = $_POST['staffphonenum'];
$sql= "UPDATE staff SET staffname= '$staffname', staffic= '$staffic', staffadd= '$staffadd', staffage= '$staffage', staffphonenum= '$staffphonenum' WHERE staffid= '$staffid' ";
$query = mysql_query($sql) or die ("Error: " . mysql_error());
header('location : menus.php');
echo 'Successfully Updated. <a href="menus.php">Home</a> Back to main menu';

}
?>
</p>
          </div>
<?php
/* include db connection file*/
include("dbconn.php");
/* capture student number */
if(isset($_GET['staffid'])=='staffid')
{$staffid = $_GET['staffid'];
/* execute SQL statement */
$sql= "SELECT * FROM staff WHERE staffid = '$staffid' ";
$query = mysql_query($sql) or die ("Error: " . mysql_error());
$row = mysql_num_rows($query);
if($row == 0)
{
echo "Data Not Found!";
}
else
{
$r = mysql_fetch_assoc($query);
$staffid = $r['staffid'];
$staffname = $r['staffname'];
$staffic =$r['staffic'];
$staffadd = $r['staffadd'];
$staffage = $r['staffage'];
$staffphonenum =$r['staffphonenum'];
?>
          </p>
        <div align="center">
          <table width="624" height="339" border="50">
            <tr>
              <td width="147" height="39" bgcolor="#FF99FF"> Staff Name:</td>
              <td width="425" bgcolor="#CCCCCC"><div align="left">
                <input name="staffname" type="text" id="staffname"  value="<?php echo $staffname; ?>" readonly />
              </div></td>
              </tr>
            <tr>
              <td height="34" bgcolor="#FF99FF"> Staff I/C:</td>
              <td bgcolor="#CCCCCC"><div align="left">
                <input name="staffic" type="double" id="staffic" value="<?php echo $staffic; ?>" required/>
              </div></td>
              </tr>
            <tr>
              <td height="34" bgcolor="#FF99FF"> Staff Address:</td>
              <td bgcolor="#CCCCCC"><div align="left">
                <input name="staffadd" type="text" id="staffadd"  value="<?php echo $staffadd; ?>" size="40" required/>
              </div></td>
              </tr>
            <tr>
              <td height="39" bgcolor="#FF99FF"> Staff Age:</td>
              <td bgcolor="#CCCCCC"><div align="left">
                <input name="staffage" type="int" id="staffage" value="<?php echo $staffage; ?>" required/>
              </div></td>
              </tr>
            <tr></tr>
            <tr>
              <td height="35" bgcolor="#FF99FF"> Staff Phone Number: </td>
              <td bgcolor="#CCCCCC"><input name="staffphonenum" type="double" id="staffphonenum" value="<?php echo $staffphonenum; ?>" /></td>
            </tr>
                   
            <tr>
              <td height="40" colspan="3" bgcolor="#999999"><div align="center">
                <input type="submit" name="Update" value="Update" />
              </div></td>
              </tr>
            </table>
          </div>
</form>
</td>
    </tr>
  </table>
</div>
<?php
}
}
}

mysql_close($dbconn);
?>
</body>
</html>
