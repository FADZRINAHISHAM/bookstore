

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log Masuk</title>
</head>

<body bgcolor="#FFCCFF">
<form name="form" method="post" action="login.php">
<div align="center">
  <table width="830" height="391">
    <tr>
      <td bgcolor="#FFFFFF"><p><img src="banner.jpg" width="1030" height="141" align="middle" /></p>
        <p>&nbsp;</p>
        <div align="center">
          <table width="485" height="353" border="50">
            <tr>
              <td height="48" colspan="2" bgcolor="#CCCCCC"><div align="center">
                <h2><strong>LOG MASUK</strong></h2>
                </div></td>
              </tr>
            <tr bgcolor="#CCCCCC">
              <td height="152" colspan="2" bgcolor="#FF99FF"><div align="center">
                <h3><strong>Nama Pengguna : </strong>
  <input name="username" type="text" required id="username" />
                </h3>
                <h3 align="center"><strong>Kata Laluan : </strong>
                  <input name="password" type="password" required id="password"/>
              </h3>
               
               <?php
			session_start();
			/* include db connection file */
			include("dbconn.php");
			if(isset($_POST['Submit'])){
			/* capture values from HTML form */
			$username = $_POST['username'];
			$password = $_POST['password'];
			if($username == "admin" && $password == "admin"){
			$_SESSION['username'] = "Administrator";
			header("Location: menu.php");
			}
			else
			{	
				echo "Salah Masukkan Nama Pengguna atau Kata Laluan !";
				
			}
			}
			?>
			
			<?php
			mysql_close($dbconn);?>
						   
                </div></td>
              </tr>
            <tr></tr>
            <tr>
              <td height="44" colspan="4" bgcolor="#CCCCCC"><div align="center">
                <input type="submit" name="Submit" value="Log Masuk" />
                </div></td>
              </tr>
          </table>
        </div>
        <div align="center"></div></td>
    </tr>
</table>
</div>
<div align="center"></div>
</form>
</body>
</html>