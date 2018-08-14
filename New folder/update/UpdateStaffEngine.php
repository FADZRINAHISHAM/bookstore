<?php
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con, 'bookstore');
	$sql = "UPDATE staff SET 
							staffname='$_POST[staffname]',
							staffic='$_POST[staffic]',
							staffadd='$_POST[staffadd]',
							staffage='$_POST[staffage]',
							staffphonenum='$_POST[staffphonenum]'
						WHERE staffid='$_POST[staffid]'";
	if(mysqli_query($con,$sql))
		header("refresh:1; url=UpdateStaff.php");
	else
		echo "Not Update";
?>